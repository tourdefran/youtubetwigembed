<?php

namespace Bolt\Extension\tourdefran\youtubeTwigEmbed;

use Bolt\Extension\SimpleExtension;

/**
 * youtubeTwigEmbed extension class.
 *
 * @author Franco Arias <francoarias@gmail.com>
 */
class youtubeTwigEmbedExtension extends SimpleExtension
{
	public function isSafe()
	{
	    return true;
	}	

    public function initialize()
    {
        $this->addTwigFunction('youtube', 'twigYoutube');
    	$this->addTwigFunction('vimeo', 'twigVimeo');
    }

	function twigYoutube($id = "")
	{

        $html = '<div class="artist-video"><div class="flex-video"><iframe width="560" height="315" src="https://www.youtube.com/embed/%id%" frameborder="0" allowfullscreen></iframe></div></div>';
        
        $html = str_replace("%id%", $id, $html);

        return new \Twig_Markup($html, 'UTF-8');        
	}

    function twigVimeo($id = "")
    {

        $html = '<div class="artist-video"><div class="flex-video"><iframe src="https://player.vimeo.com/video/%id%?title=0&byline=0&portrait=0&badge=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div>';
        
        $html = str_replace("%id%", $id, $html);

        return new \Twig_Markup($html, 'UTF-8');        
    }

    public function getName()
    {
        return "youtube";
    }	
}
