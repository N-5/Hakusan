<?php
/*
Template Name: camp
*/
?>
<?php get_header(); ?>
<main id="camp">
  <section class="camp-information">
    <div class="l-container">
      <h1 class="m-page-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"><span>清流の郷 瀬波川キャンプ場</span></h1>
      <h2 class="m-block-title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">イラストマップ</h2>
      <div class="camp-information__illust" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1200"><img src="<?php echo get_template_directory_uri(); ?>/img/camp/camp-information.jpg" alt="イラストマップ"></div>
    </div>
  </section>

  <section class="camp-contact">
    <div class="l-container">
      <div class="l-col2">
        <div class="l-col2__item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
          <h3 class="m-block-title">ご予約</h3>
          <p class="u-m">予約申込はこちらから</p>
          <div class="m-link"><a href="<?php echo home_url(); ?>/reserve/">ご予約はこちら</a></div>
        </div>
        <div class="l-col2__item" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
          <h3 class="m-block-title">注意事項</h3>
          <p class="u-m">ダウンロードはこちら</p>
          <div class="m-link"><a href="<?php echo get_template_directory_uri(); ?>/pdf/camp_form.pdf">PDF</a></div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('inc/topics'); ?>

  <section class="camp-guide">
    <div class="l-container">
      <h2 class="m-block-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">利用案内</h2>
      <table class="c-table__col2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
        <tbody class="c-table-list">
          <tr class="c-table-list__item">
            <th class="title">利用期間</th>
            <td class="detail">4月15日～11月30日まで（積雪時はクローズ）</td>
          </tr>
          <tr class="c-table-list__item">
            <th class="title">予約受付</th>
            <td class="detail">通年受付</td>
          </tr>
          <tr class="c-table-list__item">
            <th class="title">主なキャンプ場設備</th>
            <td class="detail">管理棟（ログハウス、冷蔵庫）、炊事棟、水洗トイレ、キャンプファイヤー</td>
          </tr>
          <tr class="c-table-list__item">
            <th class="title">施設管理者</th>
            <td class="detail"> 株式会社 白山瀬波</td>
          </tr>
          <tr class="c-table-list__item">
            <th class="title">最寄りの施設</th>
            <td class="detail">交流施設白山里、大門温泉、吉野工芸の里、白山麓テーマパーク、道の駅瀬女等</td>
          </tr>
          <tr class="c-table-list__item">
            <th class="title">ご予約・お問合せ先</th>
            <td class="detail">〒920-2323 石川県白山市瀬波子19番地5<br>TEL：(076)255-5288<br>FAX：(076)255-5289</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <section class="camp-leisure">
    <div class="l-container">
      <h2 class="m-block-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">レジャー体験</h2>
      <div class="l-col3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
        <div class="l-col3__item">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/common/col-img.jpg"></div>
          <div class="m-card-title">ゴリ採り体験</div>
          <div class="text">ゴリ採り網と箱メガネでゴリ採り体験</div>
        </div>
        <div class="l-col3__item">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/common/col-img.jpg"></div>
          <div class="m-card-title">岩魚のつかみ取り</div>
          <div class="text">要予約：30人以上の団体様対象</div>
        </div>
        <div class="l-col3__item">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/common/col-img.jpg"></div>
          <div class="m-card-title">渓流釣り</div>
          <div class="text">期間3/1～9/30、遊漁証必要。年券4,000円(岩魚・ヤマメ)</div>
        </div>
        <div class="l-col3__item">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/common/col-img.jpg"></div>
          <div class="m-card-title">登山道</div>
          <div class="text">ウマヤノツボ(白山市史跡)を登山。カタクリやイワカガミ群生を観察。春には”すすたけ”採りも可能。</div>
        </div>
        <div class="l-col3__item">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/common/col-img.jpg"></div>
          <div class="m-card-title">桂の木</div>
          <div class="text">白山市天然記念物の桂の木(樹齢約400年)が観察できます。秋口の甘い匂いが特徴。</div>
        </div>
        <div class="l-col3__item">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/common/col-img.jpg"></div>
          <div class="m-card-title">林道散策</div>
          <div class="text">車が通れる林道は5km以上。勇気のある方は富山県や岐阜県までチャレンジ？</div>
        </div>
      </div>
    </div>
  </section>
  <section class="camp-price">
    <div class="l-container__large">
      <h2 class="m-block-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">料金表</h2>
      <div class="camp-price__usage" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        <div class="u-md">
          <table class="c-table__flex">
            <tbody>
              <tr>
                <th><strong>利用料金</strong></th>
                <th>日帰り<br>
                  <span>10:00～17:00頃</span></th>
                <th>宿　泊<br>
                  <span>～17:00頃<br>(日帰り料金に加算)</span></th>
                <th>管理棟使用
                  <ul>
                    <li><span>ロフトのみ</span></li>
                    <li><span>倉庫のみ</span></li>
                    <li><span>ロフト+倉庫</span></li>
                  </ul>
                </th>
                <th>キャンプファイヤー</th>
                <th>駐車場</th>
              </tr>
              <tr>
                <td>大人（中学生以上）</td>
                <td>300円</td>
                <td>300円</td>
                <td rowspan="3">
                  <ul>
                    <li>一律<br>
                      10,000円</li>
                    <li>一律<br>
                      10,000円</li>
                    <li>一律<br>
                      15,000円</li>
                  </ul>
                </td>
                <td rowspan="3">3,000円/回<br>
                  <span>※芝維持費として</span></td>
                <td rowspan="3">300円/台</td>
              </tr>
              <tr>
                <td>子供（5歳以上小学生以下）</td>
                <td>200円</td>
                <td>200円</td>
              </tr>
              <tr>
                <td>幼児（4歳以下）</td>
                <td>無料</td>
                <td>無料</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="u-md_max">
          <table class="c-table__flex">
            <tbody>
              <tr>
                <th colspan="2">利用料金</th>
              </tr>
              <tr>
                <th colspan="2" rowspan="1">大人（中学生以上）</th>
              </tr>
              <tr>
                <th>日帰り<br>
                  <span>10:00～17:00頃</span></th>
                <td>300円</td>
              </tr>
              <tr>
                <th>宿　泊<br>
                  <span>～17:00頃</span></th>
                <td>300円</td>
              </tr>
              <tr>
                <th colspan="2" rowspan="1">子供（5歳以上小学生以下）</th>
              </tr>
              <tr>
                <th>日帰り<br>
                  <span>10:00～17:00頃</span></th>
                <td>200円</td>
              </tr>
              <tr>
                <th>宿　泊<br>
                  <span>～17:00頃</span></th>
                <td>無料</td>
              </tr>
              <tr>
                <th colspan="2" rowspan="1">幼児（4歳以下）</th>
              </tr>
              <tr>
                <th>日帰り<br>
                  <span>10:00～17:00頃</span></th>
                <td>200円</td>
              </tr>
              <tr>
                <th>宿　泊<br>
                  <span>～17:00頃</span></th>
                <td>無料</td>
              </tr>
              <tr>
                <th colspan="2" rowspan="1">管理棟使用</th>
              </tr>
              <tr>
                <th><span>ロフトのみ</span></th>
                <td>一律<br>
                  10,000円</td>
              </tr>
              <tr>
                <th><span>倉庫のみ</span></th>
                <td>一律<br>
                  10,000円</td>
              </tr>
              <tr>
                <th><span>ロフト+倉庫</span></th>
                <td>一律<br>
                  15,000円</td>
              </tr>
              <tr>
                <th colspan="2" rowspan="1">キャンプファイヤー</th>
              </tr>
              <tr>
                <td colspan="2">3,000円/回<br>
                  <span>※芝維持費として</span></td>
              </tr>
              <tr>
                <th colspan="2" rowspan="1">駐車場</th>
              </tr>
              <tr>
                <td colspan="2">300円/台</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="camp-price__rental" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
        <div class="u-md">
          <table class="c-table__flex">
            <tbody>
              <tr>
                <th>レンタル料金</th>
                <th>1日</th>
                <th>&nbsp;</th>
                <th>1日</th>
                <th>&nbsp;</th>
                <th>1日</th>
              </tr>
              <tr>
                <td>鉄板（枚）</td>
                <td>100円</td>
                <td>やかん（個）</td>
                <td>100円</td>
                <td>ゴリ採り網（個）</td>
                <td>100円</td>
              </tr>
              <tr>
                <td>鉄網（枚）</td>
                <td>100円</td>
                <td>なべ（個）</td>
                <td>100円</td>
                <td>箱メガネ（個）</td>
                <td>100円</td>
              </tr>
              <tr>
                <td>Ｕ字溝（本）</td>
                <td>300円</td>
                <td>飯盒（個）</td>
                <td>100円</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="u-md_max">
          <table class="c-table__flex">
            <tbody>
              <tr>
                <th colspan="3"><strong>レンタル料金</strong></th>
              </tr>
              <tr>
                <td>鉄板（枚）</td>
                <td>1日</td>
                <td>100円</td>
              </tr>
              <tr>
                <td>やかん（個）</td>
                <td>1日</td>
                <td>100円</td>
              </tr>
              <tr>
                <td>ゴリ採り網（個）</td>
                <td>1日</td>
                <td>100円</td>
              </tr>
              <tr>
                <td>鉄　網（枚）</td>
                <td>1日</td>
                <td>100円</td>
              </tr>
              <tr>
                <td>なべ（個）</td>
                <td>1日</td>
                <td>100円</td>
              </tr>
              <tr>
                <td>箱メガネ（個）</td>
                <td>1日</td>
                <td>100円</td>
              </tr>
              <tr>
                <td>Ｕ字溝（本）</td>
                <td>1日</td>
                <td>300円</td>
              </tr>
              <tr>
                <td>飯盒（個）</td>
                <td>1日</td>
                <td>100円</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="camp-price__sale" data-aos="fade-up" data-aos-delay="500" data-aos-duration="800">
        <div class="u-md">
          <table class="c-table__flex">
            <tbody>
              <tr>
                <th>販売料金</th>
                <td>薪（束）</td>
                <td>600円</td>
                <td>炭（3kg）</td>
                <td>800円</td>
              </tr>
              <tr>
                <td colspan="5">その他 物販も取扱いしています。ご希望の方は直接ご連絡をお願いします。</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="u-md_max">
          <table class="c-table__flex">
            <tbody>
              <tr>
                <th colspan="2">販売料金</th>
              </tr>
              <tr>
                <td>薪（束）</td>
                <td>600円</td>
              </tr>
              <tr>
                <td>炭（3kg）</td>
                <td>800円</td>
              </tr>
              <tr>
                <td colspan="2">その他 物販も取扱いしています。ご希望の方は直接ご連絡をお願いします。</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <section class="camp-contact">
    <div class="l-container">
      <div class="l-col2">
        <div class="l-col2__item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
          <h3 class="m-block-title">ご予約</h3>
          <p class="u-m">予約申込はこちらから</p>
          <div class="m-link"><a href="<?php echo home_url(); ?>/reserve/">ご予約はこちら</a></div>
        </div>
        <div class="l-col2__item" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
          <h3 class="m-block-title">注意事項</h3>
          <p class="u-m">ダウンロードはこちら</p>
          <div class="m-link"><a href="<?php echo get_template_directory_uri(); ?>/pdf/camp_form.pdf">PDF</a></div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>