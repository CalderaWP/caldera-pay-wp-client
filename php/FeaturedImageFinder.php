<?php


namespace calderawp\CalderaPay\WpClient;
use calderawp\CalderaPay\WpClient\Contracts\FeatureImageFinderContract;


/**
 * Class FeaturedImageFinder
 * @package calderawp\CalderaPay\WpClient
 */
class FeaturedImageFinder implements  FeatureImageFinderContract
{

    /**
     * Find the featured image and returns image and srcset data
     *
     * @param int $featuredImageId
     * @return array
     */
    public function data(int $featuredImageId) :array {
        $size = [
            'width' => '1200',
            'height' => '437',
        ];

        $return = [
            'ID' => $featuredImageId,
            'html' => '',
            'url' => wp_get_attachment_image_url( $featuredImageId, 'full'),
            'width' => $size['width'],
            'height' => $size['height'],
            'srcset' => '',
            'sizes'=> [],
            'alt' => ''
        ];


        $return[ 'alt' ] = get_post_meta( $featuredImageId, '_wp_attachment_image_alt', true );
        $return[ 'srcset' ] = wp_get_attachment_image_srcset($featuredImageId. $size);
        $return[ 'sizes' ] = wp_get_attachment_image_sizes($featuredImageId, $size);
        $return[ 'html' ] =  wp_get_attachment_image($featuredImageId,'large',$size);

        return $return;
    }
}