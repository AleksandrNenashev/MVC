<?php

namespace MyProject\Controllers;

use MyProject\View\View;

class MainController
{
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function main()
    {
        $articles = [
            ['name' => 'Как превратить фотографию в 3D-объект с помощью Nvidia Kaolin и PyTorch: рендеринг DIB-R', 'text' => 'В научной работе NVIDIA 2019 года улучшенный дифференциальный рендерер — DIB-R представлен как инструмент решения одной из самых популярных сегодня задач Deep Learning: генерации 3D-объектов из одного двухмерного изображения. Статья на ArXiv содержала исходный код, но в ней не оказалось необходимой для его выполнения ML-модели. К старту курса «Machine Learning и Deep Learning», партнёр которого — компания NVIDIA, делимся переводом о том, как запустить руководство по работе с этой программой визуализации, как она работает, как обучить ML-модель рендеринга и проверить её в действии.'],
            ['name' => 'Как работают Django Class-based views', 'text' => 'Для новичка, который осваивает Django, представления на основе классов больше похожи на магию чёрного ящика, по крайней мере, у меня при первом знакомстве сложилось именно такое впечатление. Обильные руководства зачастую показывают, какие атрибуты и методы следует определить в вашем классе, чтобы этот ящик работал на вас, но не дают понимания принципа работы.'],
        ];
        $this->view->renderHtml('main/main.php', ['articles' => $articles]);
    }

    public function sayHello(string $name)
    {
        $this->view->renderHtml('main/hello.php', ['name' => $name]);
    }
}