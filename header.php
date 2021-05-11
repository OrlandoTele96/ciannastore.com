<?php
    class HeaderPage {
        public $opentag= '<header>';
        public $closetag = '</header>';
        private $topbar = [];
        private $bottombar = [];
        public function getHeader(){
            $content = '';
            foreach ($this->topbar as $section)
                $content = $content.$section;
            return $this->opentag.$content.$this->closetag;
        }
        public function setTopBar(){
            $open = '<div class="top-bar">';
            $brand = $this->getImageBrand();
            $close = '</div>';
            array_push($this->topbar,$open);
            array_push($this->topbar,$brand);
            array_push($this->topbar,$close);
        }
        /*public function setBottomBar (){

        }*/
        public function getImageBrand(){
            $open = '<div class="cianabrand">';
            $Image = '<img src='.'"assets/img/brand.png"'.' alt="">';
            $close = '</div>';
            return $open.$Image.$close;
        }
        /*public fuction getTopMenu(){

        }*/
    } 
?>