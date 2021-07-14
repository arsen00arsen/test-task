<?php

    class MakePicture {
        function __construct($widthOfFigure, $heightOfFigure, $circlingFigure, $borderWidth, $borderColor, $borderStyle, $someText) {
            $this->widthOfFigure = $widthOfFigure;
            $this->heightOfFigure = $heightOfFigure;
            $this->circlingFigure = $circlingFigure;
            $this->borderWidth = $borderWidth;
            $this->borderColor = $borderColor;
            $this->borderStyle = $borderStyle;
            $this->someText = $someText;
        }

        public function formatValue($type = 'px') {
            $this->widthOfFigure = $this->widthOfFigure . $type;
            $this->heightOfFigure = $this->heightOfFigure . $type;
            $this->circlingFigure = $this->circlingFigure . $type;
            $this->borderWidth = $this->borderWidth . $type;
        }

        public function makeImage() {
            echo "<div style='width: $this->widthOfFigure; height: $this->heightOfFigure; border-radius: $this->circlingFigure; border-width: $this->borderWidth; border-color: $this->borderColor; border-style: $this->borderStyle;'>$this->someText</div>";
        }
    }


    $newFigure = new MakePicture(150, 150, 5, 5, 'black', 'solid', 'some text');
    $newFigure->formatValue('px');
    $newFigure->makeImage();

?>