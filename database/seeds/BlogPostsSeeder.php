<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogPostsSeeder extends Seeder
{
    private $imgs = [
        13318 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/Natalia_G_350W_42nd_sSt_21_Living_Dining_1_staged_BD.jpg",
        13329 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/Romy_4_Living_Dining_staged_VDHD.jpg",
        13336 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/Lorenzo_116_E_66_Rooftop_stage_AN.jpg",
        13345 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/Exterior_UK_Snow_Architects.jpg",
        13354 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/Noteveryvirtualstagerisreallyavirtualstager_Header.jpg",
        13361 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/whatisrealtimerendering.png",
        13367 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/howtotakeyoupbusinesstothenextlevelwith3Dproductvisualization.png",
        13371 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/futurephotographyvsproductrendering.png",
        13376 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/Howtoestimatethepropertyvalueofyourhome.png",
        13382 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/buyingahouse.png",
        13400 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/ApologyLatter-37.png",
        13405 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/ApologyLatter-28.png",
        13423 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/ApologyLatter-33.png",
        13451 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/3dtours.png",
        13458 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/stagedbedroom-1.jpg",
        13464 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/realestatevirtualreality.png",
        13469 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/6.jpg",
        13475 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/realestatephoto.png",
        13482 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/4.jpg",
        13489 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/32.jpg",
        13495 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/21.jpg",
        13502 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/13.png",
        13508 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/7ClientsYouShouldTurnDown_spotlessblog.png",
        13512 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/SellYourPropertyFasterWithSpotlessVirtualStagingAgency.png",
        13518 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/MoneyMakingRealEstate_spotlessblog.png",
        13544 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/HomeSellingMistakesspotlessblogcover.png",
        13550 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/sellhomefaster_spotlessblogcover.png",
        13562 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/HomeStagingStatistics_spotlessblogcover.png",
        13569 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/FrenchStyle_spotlessblogcover.png",
        13576 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/Scandinavianspotlessblogcover.png",
        13586 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/TodaysLessonisAboutSouthwesternblogspotlesscover.png",
        13596 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/Eclecticspotlessblogcover.png",
        13620 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/2709contemporaryspotlesscover.png",
        13632 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/VirtualStagingTips.png",
        13649 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/UsefulRealEstateTools.png",
        13653 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/01.png",
        13673 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/Living_dining.jpg",
        13687 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/833_Monroe_4D_Bedroom_2_staged-1.jpg",
        13704 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/1-2.jpg",
        13715 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/screen1.png",
        13726 => "https://www.spotlessagency.com/wp-content/uploads/2018/03/Randal_living_room_2_1.jpg",
        14335 => "https://www.spotlessagency.com/wp-content/uploads/2018/04/Living_Dining-staged_after.png",
        14425 => "https://www.spotlessagency.com/wp-content/uploads/2018/05/Home_staging.png",
        14449 => "https://www.spotlessagency.com/wp-content/uploads/2018/05/Kitchen_Dining_Living_staged.jpg",
        14457 => "https://www.spotlessagency.com/wp-content/uploads/2018/05/Living_room_staged-1-1.jpg",
        14486 => "https://www.spotlessagency.com/wp-content/uploads/2018/05/Living_Room_staged-2-1.jpg",
        14495 => "https://www.spotlessagency.com/wp-content/uploads/2018/05/bedroom_staged-2-1.jpg",
        14508 => "https://www.spotlessagency.com/wp-content/uploads/2018/05/Living_Dining_Kitchen_staged-1.jpg",
        15041 => "https://www.spotlessagency.com/wp-content/uploads/2018/07/Kitchen_Living_dining_staged-prev.jpg",
        15056 => "https://www.spotlessagency.com/wp-content/uploads/2018/07/Living_dining_satged-prev.jpg",
        15063 => "https://www.spotlessagency.com/wp-content/uploads/2018/07/plan-prev.jpg",
        15072 => "https://www.spotlessagency.com/wp-content/uploads/2018/07/REN-prev.jpg",
        15078 => "https://www.spotlessagency.com/wp-content/uploads/2018/07/1212.jpg",
        15084 => "https://www.spotlessagency.com/wp-content/uploads/2018/07/rac-2.jpg",
        15090 => "https://www.spotlessagency.com/wp-content/uploads/2018/07/121254548_fin-prev.jpg",
        15094 => "https://www.spotlessagency.com/wp-content/uploads/2018/07/1c33af2c-a572-4e32-bcda-eb825e577837.jpg",
        15100 => "https://www.spotlessagency.com/wp-content/uploads/2018/07/4587412.jpg",
        15199 => "https://www.spotlessagency.com/wp-content/uploads/2018/07/1_1.jpg",
        15209 => "https://www.spotlessagency.com/wp-content/uploads/2018/07/6_1.jpg",
        15254 => "https://www.spotlessagency.com/wp-content/uploads/2018/08/post1s.jpg",
        15231 => "https://www.spotlessagency.com/wp-content/uploads/2018/08/qw_s.jpg",
        15277 => "https://www.spotlessagency.com/wp-content/uploads/2018/08/prev1.jpg",
        15278 => "https://www.spotlessagency.com/wp-content/uploads/2018/08/prev2_2.jpg",
        15279 => "https://www.spotlessagency.com/wp-content/uploads/2018/08/prev_3.jpg",
        15303 => "https://www.spotlessagency.com/wp-content/uploads/2019/01/How-to-make-a-virtual-tour-of-real-estate-outstanding.jpg",
        15325 => "https://www.spotlessagency.com/wp-content/uploads/2019/01/8-sales-tips-for-realtors.jpg",
        15348 => "https://www.spotlessagency.com/wp-content/uploads/2019/02/7.jpg",
        15374 => "https://www.spotlessagency.com/wp-content/uploads/2019/04/statistics.jpg",
        15379 => "https://www.spotlessagency.com/wp-content/uploads/2019/04/delayed.jpg",
        15389 => "https://www.spotlessagency.com/wp-content/uploads/2019/04/10.jpg",
        15397 => "https://www.spotlessagency.com/wp-content/uploads/2019/05/Real_estate_industry.jpg",
        15402 => "https://www.spotlessagency.com/wp-content/uploads/2019/05/5_tips.jpg",
        15415 => "https://www.spotlessagency.com/wp-content/uploads/2019/05/7-mistakes.jpg",
        15429 => "https://www.spotlessagency.com/wp-content/uploads/2019/06/is-a-real.jpg",
        15434 => "https://www.spotlessagency.com/wp-content/uploads/2019/06/Cost-effective.jpg",
        15438 => "https://www.spotlessagency.com/wp-content/uploads/2019/06/10-tips.jpg",
        15442 => "https://www.spotlessagency.com/wp-content/uploads/2019/06/Untitled-5-Recovered.jpg",
        15448 => "https://www.spotlessagency.com/wp-content/uploads/2019/07/Fancy_cars_for_real_estate_agents_yes_or_no.jpg",
        15456 => "https://www.spotlessagency.com/wp-content/uploads/2019/07/How_to_attract_the_first_real_estate_clients.jpg",
        15460 => "https://www.spotlessagency.com/wp-content/uploads/2019/07/10-Traits-every-real-estate-agent-should-have.jpg",
        15465 => "https://www.spotlessagency.com/wp-content/uploads/2019/08/Top-10-cities-to-build-real-estate-career-in-2019.jpg",
        15471 => "https://www.spotlessagency.com/wp-content/uploads/2019/08/6-tips-for-realtor-how-to-survive-a-holiday-season.jpg",
        15476 => "https://www.spotlessagency.com/wp-content/uploads/2019/08/7-things-done-by-top-real-estate-agents.jpg",
        15483 => "https://www.spotlessagency.com/wp-content/uploads/2019/08/How-to-plan-a-vacation-for-real-estate-agent.jpg",
        15494 => "https://www.spotlessagency.com/wp-content/uploads/2019/08/The-top-real-estate-broker-joined-Guinness-Book-records-men.jpg",
        15501 => "https://www.spotlessagency.com/wp-content/uploads/2019/09/25-shocking-facts-every-real-estate-agent-should-know.jpg",
        15512 => "https://www.spotlessagency.com/wp-content/uploads/2019/09/10-tips-for-a-real-estate-agent-to-become-a-millionaire.jpg",
        15519 => "https://www.spotlessagency.com/wp-content/uploads/2019/09/5-tips-on-how-to-choose-an-investment-property.jpg",
        15523 => "https://www.spotlessagency.com/wp-content/uploads/2019/09/Getting-the-go-to-agent-in-the-neighborhood.jpg",
        15527 => "https://www.spotlessagency.com/wp-content/uploads/2019/10/15-signs-of-being-an-inborn-real-estate-agent.jpg",
        15549 => "https://www.spotlessagency.com/wp-content/uploads/2020/03/Andre_S-scaled.jpg",
        15564 => "https://www.spotlessagency.com/wp-content/uploads/2020/03/Untitled-new-1.jpg",
        15577 => "https://www.spotlessagency.com/wp-content/uploads/2020/03/Pandemic.jpg"
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $myArray = include(base_path('database/seeds/blog_entries.php'));
        foreach ($myArray as $id => $data) {
            if (!file_exists(base_path("database/seeds/contents/$id.html"))) {
                dump("skip $id");
                continue;
            }
            $author = $data[0];
            $publish_after = $data[1];
            $content = file_get_contents(base_path("database/seeds/contents/$id.html"));
            $post_title = $data[4]; // title
            $post_name = $data[10]; // slug
            $description = Str::limit(strip_tags($content), 160, '');
            $summary = $description;
            \Bjuppa\LaravelBlog\Eloquent\BlogEntry::create([
                'id' => $id,
                'author_name' => 'ANDREY ZLOBIN',
                'publish_after' => strtotime($publish_after),
                'image' => $this->imgs[$id],
                'content' => str_replace(["\\n", "\\r", "\n", "\r"], '', $content),
                'title' => $post_title,
                'slug' => $post_name,
                'summary' => $summary,
                'page_title' => $post_title,
                'description' => $description,
                'meta_tags' => '{}'
            ]);
        }
    }
}
