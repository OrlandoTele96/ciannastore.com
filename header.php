<?php
    class HeaderPage {
        public $opentag= '<header>';
        public $closetag = '</header>';
        private $topbar = [];
        private $bottombar = [];
        public function getHeader(){
            $content = '';
            $content_bottom = '';
            foreach ($this->topbar as $section){
                $content = $content.$section;
                }
            foreach($this->bottombar as $sectionb){
                $content_bottom = $content_bottom.$sectionb;
            }
            return $this->opentag.$content.$content_bottom.$this->closetag;
        }
        public function setTopBar(){
            $open = '<div class="top-bar">';
            $brand = $this->getImageBrand();
            $topmenu = $this->getTopMenu();
            $close = '</div>';
            array_push($this->topbar,$open);
            array_push($this->topbar,$brand);
            array_push($this->topbar,$topmenu);
            array_push($this->topbar,$close);
        }
        public function setBottomBar (){
            $open = '<div class="bottom-bar">';
            $menu_b= $this->getBottomMenu();
            $close = '</div>';
            array_push($this->bottombar,$open);
            array_push($this->bottombar,$menu_b);
            array_push($this->bottombar,$close);
        }
        public function getImageBrand(){
            $open = '<div class="cianabrand">';
            $Image = '<img src='.'"assets/img/brand.png"'.' alt="">';
            $close = '</div>';
            return $open.$Image.$close;
        }
        public function getTopMenu(){
            $nav_menu_open = '<nav>';
            $openlist = '<ul>';
            $closelist = '</ul>';
            $topmenu = '';
            $openitem = '<li><a href="profile.php">';
            $closeitem = '</a></li>';
            $menu = array('Mi perfil','Mi lista de deseos','Mi carrito');
            foreach($menu as $item)
                $topmenu = $topmenu.$openitem.$item.$closeitem;
            $nav_menu_close='</nav>';
            return $nav_menu_open.$openlist.$topmenu.$closelist.$nav_menu_close;
        }
        public function getBottomMenu(){
            $open_menu = '<nav>';
            $openlist = '<ul>';
            $closelist = '</ul>';
            $bottommenu='';
            $openitem = '<li><a href="index.html">';
            $menu = array('Inicio','Novedades','Acerca de');
            $closeitem = '</a></li>';
            foreach($menu as $item)
                $bottommenu= $bottommenu.$openitem.$item.$closeitem;

            
            $close_menu = '</nav>';
            return $open_menu.$openlist.$bottommenu.$closelist.$close_menu;
        }
    } 
?>