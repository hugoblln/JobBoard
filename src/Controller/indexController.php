<?php 

namespace App\Controller;

use App\Entity\OffreAlternance;
use App\Form\OffreAlternanceType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\OffreAlternanceRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class indexController extends AbstractController 
{

    public function __construct(
       private EntityManagerInterface $em,
       private OffreAlternanceRepository $Repo
    ) {}

    #[Route('','app.index', methods:['GET'] )]
    public function index() : Response 
    {
  

        return $this->render('index.html.twig', [
            'candidatures' => $this->Repo->findAll()
        ] );

    }

    #[Route('/create','app.create', methods:['GET','POST'] )]
    public function create(Request $request) : Response
    {
        $offre = new OffreAlternance;

        $form = $this->createForm(OffreAlternanceType::class, $offre);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $offre->setEnLigne(true);
            $offre->setRetour(false);

            $this->$em->persist($offre);
            $this->$em->flush();

            $this->addFlash('success', 'candidature ajouté');
            
            $this->redirectToRoute('app.index');
        }

        return $this->render('create.html.twig', [
            'form' => $form
        ] );
    }
};