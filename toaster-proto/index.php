<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package howcollect.toaster
 */

get_header();
?>

		<div class="top-main-body">
            <ul class="side-nav">
                <li class="go-home-btn side-li-box"><a href="#">
                    <svg class="side-li-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                    <p class="side-nav-name">ホーム</p>
                </a></li>
                <li class="go-recipe-btn side-li-box"><a href="#">
                    <svg class="side-li-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.8 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                    <p class="side-nav-name">レシピ</p>
                </a></li>
                <li class="go-vocaburaly-btn side-li-box"><a href="#">
                    <svg class="side-li-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
                    <p class="side-nav-name">用語集</p>
                </a></li>
                <li class="go-member-btn side-li-box"><a href="#">
                    <svg class="side-li-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM256 272c39.8 0 72-32.2 72-72s-32.2-72-72-72s-72 32.2-72 72s32.2 72 72 72z"/></svg>
                    <p class="side-nav-name">メンバー</p>
                </a></li>
            </ul>
            <div class="main-content-wrap">
                <p class="main-content-title">TOP</p>
                <div class="content-wrap">
                    <!--メインに表示するコンテンツ-->

                    <h2 class="section-title">新着記事</h2>
                    <ul class="main-upper-wrap">
                        <li class="main-content new-content"><a href="#">
                            <img src="<?php echo esc_url(get_theme_file_uri('image/Frame.png'));?>" class="content-thumbnail">
                            <p class="content-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
                            <div class="content-outline">
                                <img src="<?php echo esc_url(get_theme_file_uri('image/IMG_7644.JPG'));?>" class="content-by-image">
                                <p class="post-date">2023/01/25</p>    
                            </div>
                        </a></li>
                    
                    </ul>             
                    <h2 class="section-title">自作記事</h2>
                    <ul class="main-buttom-wrap">
                        <li class="main-content new-content"><a href="#">
                            <img src="../image/Frame.png" class="content-thumbnail">
                            <p class="content-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
                            <div class="content-outline">
                                <img src="../image/IMG_7644.JPG" class="content-by-image">
                                <p class="post-date">2023/01/25</p>    
                            </div>
                        </a></li>
                        <li class="main-content new-content"><a href="#">
                            <img src="../image//image.jpg" class="content-thumbnail">
                            <p class="content-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
                            <div class="content-outline">
                                <img src="../image/IMG_7644.JPG" class="content-by-image">
                                <p class="post-date">2023/01/25</p>    
                            </div>
                        </a></li>
                        <li class="main-content new-content"><a href="#">
                            <img src="../image/img-item02.jpg" class="content-thumbnail">
                            <p class="content-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
                            <div class="content-outline">
                                <img src="../image/IMG_7644.JPG" class="content-by-image">
                                <p class="post-date">2023/01/25</p>    
                            </div>
                        </a></li>
                        <li class="main-content new-content"><a href="#">
                            <img src="../image/IMG_7644.JPG" class="content-thumbnail">
                            <p class="content-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
                            <div class="content-outline">
                                <img src="../image/IMG_7644.JPG" class="content-by-image">
                                <p class="post-date">2023/01/25</p>    
                            </div>
                        </a></li>
                        <li class="main-content new-content"><a href="#">
                            <img src="../image/p-1.jpg" class="content-thumbnail">
                            <p class="content-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
                            <div class="content-outline">
                                <img src="../image/IMG_7644.JPG" class="content-by-image">
                                <p class="post-date">2023/01/25</p>    
                            </div>
                        </a></li>
                        <li class="main-content new-content"><a href="#">
                            <img src="../image/shop.jpg" class="content-thumbnail">
                            <p class="content-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
                            <div class="content-outline">
                                <img src="../image/IMG_7644.JPG" class="content-by-image">
                                <p class="post-date">2023/01/25</p>    
                            </div>
                        </a></li>
                        <li class="main-content new-content"><a href="#">
                            <img src="../image/special-image.png" class="content-thumbnail">
                            <p class="content-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
                            <div class="content-outline">
                                <img src="../image/IMG_7644.JPG" class="content-by-image">
                                <p class="post-date">2023/01/25</p>    
                            </div>
                        </a></li>
                        <li class="main-content new-content"><a href="#">
                            <img src="../image/swedish_lapphund.jpg" class="content-thumbnail">
                            <p class="content-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
                            <div class="content-outline">
                                <img src="../image/IMG_7644.JPG" class="content-by-image">
                                <p class="post-date">2023/01/25</p>    
                            </div>
                        </a></li>
                        <li class="main-content new-content"><a href="#">
                            <img src="../image/event-lifestyle.jpg" class="content-thumbnail">
                            <p class="content-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
                            <div class="content-outline">
                                <img src="../image/IMG_7644.JPG" class="content-by-image">
                                <p class="post-date">2023/01/25</p>    
                            </div>
                        </a></li>
                        <li class="main-content new-content"><a href="#">
                            <img src="../image/experience-repo.jpg" class="content-thumbnail">
                            <p class="content-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
                            <div class="content-outline">
                                <img src="../image/IMG_7644.JPG" class="content-by-image">
                                <p class="post-date">2023/01/25</p>    
                            </div>
                        </a></li>                        
                    </ul>
                    <h2 class="section-title">アクティブユーザー</h2>
                    <table class="active-users">
                        <tr>
                            <th>順位</th>
                            <th>名前</th>
                            <th>記事数</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>yopimo</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>sugimotoo</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>rirakkuma</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>kobayashi</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>umeda</td>
                            <td>5</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

<?php
get_footer();

