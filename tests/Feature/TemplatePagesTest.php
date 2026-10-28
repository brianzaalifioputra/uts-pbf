<?php

namespace Tests\Feature;

use Tests\TestCase;

class TemplatePagesTest extends TestCase
{
    public function test_all_landing_template_pages_render(): void
    {
        foreach ([
            '/' => 'Enjoy Our',
            '/about' => 'About Us',
            '/booking' => 'Book A Table',
            '/menu' => 'Food Menu',
            '/service' => 'Services',
            '/team' => 'Our Master Chefs',
        ] as $url => $content) {
            $this->get($url)->assertOk()->assertSee($content);
        }
    }

    public function test_all_admin_template_pages_render(): void
    {
        foreach ([
            '/admin' => 'Dashboard',
            '/admin/advance-sweet-alert' => 'Sweetalert',
            '/admin/calendar' => 'Calendar',
            '/admin/form-elements' => 'Form Elements',
            '/admin/tables-datatable' => 'Data Tables',
            '/admin/login' => 'Sign In',
        ] as $url => $content) {
            $this->get($url)->assertOk()->assertSee($content);
        }
    }
}
