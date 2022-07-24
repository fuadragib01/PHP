<?php

class HexToRGB {
    
    private $color;
    private $r;
    private $g;
    private $b;

    public function __construct( $colorCode = '' ) {
        $this->color = ltrim( $colorCode, '#' );
        $this->perseColor();
    }

    public function getColor() {
        return $this->color;
    }

    public function getRGBValue() {
        printf("Red = %d, Green = %d, Blue = %d\n", $this->r, $this->g, $this->b );
    }

    public function getRed() {
        return $this->r;
    }

    public function getGreen() {
        return $this->g;
    }

    public function getBlue() {
        return $this->b;
    }

    private function perseColor() {
        if ( $this->color ) {
            // $colors = sscanf( $this->color, "%02x%02x%02x" );
            // $this->r = $colors[0];
            // $this->g = $colors[1];
            // $this->b = $colors[2];
            // Short solution of above 4 lines of code
            list( $this->r, $this->g, $this->b ) = sscanf( $this->color, "%02x%02x%02x" );
        }else {
            list( $this->r, $this->g, $this->b ) = array( 0, 0, 0 );
        }
    }
}

$rgb = new HexToRGB( "#00ff00" );
$rgb->getRGBValue();
