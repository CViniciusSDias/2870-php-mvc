<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

use Alura\Mvc\Helper\HtmlRendererTrait;
use Alura\Mvc\Repository\VideoRepository;

class VideoListController implements Controller
{
    use HtmlRendererTrait;

    public function __construct(private VideoRepository $videoRepository)
    {
    }

    public function processaRequisicao(): void
    {
        $videoList = $this->videoRepository->all();
        echo $this->renderTemplate(
            'video-list',
            ['videoList' => $videoList]
        );
    }
}
