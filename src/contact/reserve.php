<table class="form-input c-table__col2">
  <tbody class="c-table-list">
    <tr class="name c-table-list__item">
      <th>お名前</th>
      <td>[mwform_text name="contact-name" size="60"]</td>
    </tr>
    <tr class="kana c-table-list__item">
      <th>ふりがな</th>
      <td>[mwform_text name="contact-kana" size="60"]</td>
    </tr>
    <tr class="number c-table-list__item">
      <th>電話番号</th>
      <td>[mwform_tel name="contact-tel" size="60"]</td>
    </tr>
    <tr class="mail c-table-list__item">
      <th>メールアドレス</th>
      <td>[mwform_text name="contact-email" size="60"]</td>
    </tr>
    <tr class="desire c-table-list__item">
      <th>施設利用及び<br class="u-md">レンタル希望</th>
      <td>[mwform_checkbox name="contact-desire" children="テント, タープ, 車" separator=","]</td>
    </tr>
    <tr class="tarp c-table-list__item">
      <th>タープ</th>
      <td>[mwform_text name="contact-tarp" size="10"]</td>
    </tr>
    <tr class="car c-table-list__item">
      <th>車</th>
      <td>[mwform_text name="contact-car" size="10"]</td>
    </tr>
    <tr class="schedule c-table-list__item">
      <th>ご利用希望日</th>
      <td>
        <div class="schedule-item">[mwform_datepicker name="contact-startday" separator=","][mwform_text name="contact-startday-time" size="10"]時〜</div>
        <div class="schedule-item">[mwform_datepicker name="contact-enday" separator=","][mwform_text name="contact-enday-time" size="10"]時まで</div>
      </td>
    </tr>
    <tr class="person c-table-list__item">
      <th>ご利用人数</th>
      <td>[mwform_text name="contact-person" size="10"]人</td>
    </tr>
    <tr class="adress c-table-list__item">
      <th>ご住所</th>
      <td>[mwform_text name="contact-adress" size="10"]</td>
    </tr>
    <tr class="note c-table-list__item">
      <th>お問い合わせ内容</th>
      <td class="textarea">[mwform_textarea name="contact-note" cols="50" rows="15"]</td>
    </tr>
  </tbody>
</table>
<div class="form-btnarea">
  <div class="form-btnarea__inner">
    <div class="form-btnarea__back">[mwform_backButton value="戻る"]</div>
    <div class="form-btnarea__submit">[mwform_submit name="submit" value="送信"]</div>
    <div class="form-btnarea__confirm">[mwform_confirmButton value="確認"]</div>
  </div>
</div>