<?php
namespace Swissup\ThemeFrontendAbsolute\Upgrades;

class InitialInstallation extends \Swissup\Core\Model\Module\Upgrade
{
    public function getCommands()
    {
        return [
            'Configuration' => $this->getConfiguration(),
            'CmsBlock'      => $this->getCmsBlocks(),
            'CmsPage'       => $this->getCmsPages(),
            'ProductAttribute' => $this->getProductAttribute(),
            'Products' => [
                'featured'    => 10,
                'news_from_date' => 8
            ]
        ];
    }

    public function getConfiguration()
    {
        $themeId = $this->objectManager
            ->create('Magento\Theme\Model\ResourceModel\Theme\Collection')
            ->getThemeByFullPath('frontend/Swissup/absolute')
            ->getThemeId();
        return [
            'design/theme/theme_id' => $themeId,
            'cms/wysiwyg/enabled' => 'hidden'
        ];
    }

    public function getCmsBlocks()
    {
        return [
            'slogan' => [
                'title' => 'slogan',
                'identifier' => 'slogan',
                'is_active' => 1,
                'content' => <<<HTML
<div class="slogan" >
    <img src="{{view url='images/slogan.gif'}}" alt="" />
</div>
HTML
            ],
            'footer_contacts' => [
                'title' => 'footer_contacts',
                'identifier' => 'footer_contacts',
                'is_active' => 1,
                'content' => <<<HTML
Company Name | USA, NY, Street Address | Phone: 1-800-000-0000
HTML
            ],
            'footer_additional' => [
                'title' => 'footer_additional',
                'identifier' => 'footer_additional',
                'is_active' => 1,
                'content' => <<<HTML
<div class="footer-additional">
    <div class="footer-contacts">{{widget type="Magento\Cms\Block\Widget\Block" template="widget/static_block/default.phtml" block_id="footer_contacts"}}</div>
    <div class="footer-payments">{{widget type="Magento\Cms\Block\Widget\Block" template="widget/static_block/default.phtml" block_id="footer_payments"}}</div>
</div>
HTML
            ],
            'footer_links_block' => [
                'title' => 'footer_links_block',
                'identifier' => 'footer_links_block',
                'is_active' => 1,
                'content' => <<<HTML
<div class="box informational">
    <ul>
        <li>
            <h4>About us</h4>
            <ul>
                <li><a href="{{store direct_url='about'}}">About Us</a></li>
                <li><a href="{{store direct_url='our-company'}}">Our company</a></li>
                <li><a href="{{store direct_url='sitemap'}}">Sitemap</a></li>
            </ul>
        </li>
        <li>
            <h4>Customer information</h4>
            <ul>
                <li><a href="{{store direct_url='contact'}}">Contact Us</a></li>
                <li><a href="{{store direct_url='price-matching'}}">Price matching</a></li>
                <li><a href="{{store direct_url='testimonials'}}">Testimonials</a></li>
            </ul>
        </li>
        <li>
            <h4>Security &amp; privacy</h4>
            <ul>
                <li><a href="{{store direct_url='privacy'}}">Privacy Policy</a></li>
                <li><a href="{{store direct_url='safe-shopping'}}">Safe &amp; secure shopping</a></li>
                <li><a href="{{store direct_url='terms'}}">Terms &amp; conditions</a></li>
            </ul>
        </li>
        <li class="last">
            <h4>Shipping &amp; returns</h4>
            <ul>
                <li><a href="{{store direct_url='delivery'}}">Delivery information</a></li>
                <li><a href="{{store direct_url='guarantees'}}">Satisfaction guarantee</a></li>
                <li><a href="{{store direct_url='returns'}}">Returns policy</a></li>
            </ul>
        </li>
    </ul>
</div>
HTML
            ],
            'footer_payments' => [
                'title' => 'footer_payments',
                'identifier' => 'footer_payments',
                'is_active' => 1,
                'content' => <<<HTML
<ul class="footer-payments" >
    <li><img src="{{view url='images/payments/amex.svg'}}" alt=""></li>
    <li><img src="{{view url='images/payments/visa.svg'}}" alt=""></li>
    <li><img src="{{view url='images/payments/maestro.svg'}}" alt=""></li>
    <li><img src="{{view url='images/payments/mastercard.svg'}}" alt=""></li>
</ul>
HTML
            ],
            'homepage_callout' => [
                'title' => 'homepage_callout',
                'identifier' => 'homepage_callout',
                'is_active' => 1,
                'content' => <<<HTML
<div class="home-callouts">
    <div class="callout callout1">
        <img src="{{view url='images/callout1.png'}}" alt="" />
    </div>
    <div class="callout callout2">
        <img src="{{view url='images/callout2.png'}}" alt="" />
    </div>
</div>
HTML
            ],
            'featured' => [
                'title' => 'featured',
                'identifier' => 'featured',
                'is_active' => 1,
                'content' => <<<HTML
{{widget type="Magento\CatalogWidget\Block\Product\ProductsList" title="Featured Products" products_count="10" template="product/featured.phtml" conditions_encoded="^[`1`:^[`type`:`Magento||CatalogWidget||Model||Rule||Condition||Combine`,`aggregator`:`all`,`value`:`1`,`new_child`:``^]^]" type_name="Catalog Products List"}}

HTML
            ]
        ];
    }

    public function getCmsPages()
    {
        return [
            'home' => [
                'title' => 'Absolute',
                'identifier' => 'home',
                'page_layout' => '2columns-right',
                'content_heading' => '',
                'is_active' => 1,
                'layout_update_xml' => '',
                'custom_theme' => null,
                'custom_root_template' => null,
                'custom_layout_update_xml' => null,
                'content' => <<<HTML
<div class="homepage-slider" >
    <div class="slick-slider" data-mage-init='{"slick": {"slidesToShow": 1, "slidesToScroll": 1, "dots": true, "autoplay": true, "rows": 0}}'>
        <div><img src="{{view url='images/slider/slide1.jpg'}}" alt=""/></div>
        <div><img src="{{view url='images/slider/slide2.jpg'}}" alt=""/></div>
        <div><img src="{{view url='images/slider/slide3.jpg'}}" alt=""/></div>
    </div>
</div>
{{widget type="Magento\Catalog\Block\Product\Widget\NewWidget" display_type="new_products" products_count="8" template="product/widget/new/content/new_grid.phtml"}}
HTML
            ]
        ];
    }

    public function getProductAttribute()
    {
        return [
            [
                'attribute_code' => 'featured',
                'frontend_label' => ['Featured'],
                'default_value'  => 0
            ]
        ];
    }
}
