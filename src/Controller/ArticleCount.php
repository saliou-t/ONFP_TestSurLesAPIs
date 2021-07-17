<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Flex\Response;

class ArticleCount{
    private $article;
    
    public function __construct(ArticleRepository $articleRepository){
        return $this->article = $articleRepository;
    }
    
    public function __invoke(){
    
        $articles = $this->article->findAll();
        $total = count($articles);

        return $this->json(['total'=>$total]);
    }

}