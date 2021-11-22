<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('textStatus', [$this, 'showTextStatus']),
        ];
    }

    public function showTextStatus($status)
    {
        switch ($status){
            case 0:
                $text = 'nie';
                break;
            case 1:
                $text = 'tak';
                break;
            default:
                $text = '';
        }

        return $text;
    }
}