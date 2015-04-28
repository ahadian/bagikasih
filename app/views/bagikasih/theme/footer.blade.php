<footer>
  <div class="row">
    <div class="col-lg-12">
      <hr>
      <ul class="list-unstyled">
        <li class="pull-right"><a href="#top" id="go_to_top">Kembali ke atas</a></li>
        <li><a href="tentang-kami">Tentang Kami</a></li>
        <li><a href="bantuan">Bantuan</a></li>
        <li><a href="daftarkan-target-sosial">Daftarkan Target Sosial</a></li>
        <li><a href="daftarkan-event">Daftarkan Event</a></li>
        <li><a href="kontak-kami">Kontak Kami</a></li>
      </ul>
      <p>Copyright  &copy; 2015 <a href="http://Bagikasih.com" rel="nofollow">Bagikasih.com</a>.</p>
    </div>
  </div>
</footer>

<?php
$currenturl = Request::url();
$currenturl = str_replace(URL(''), '', $currenturl);
$currenturl = str_replace('/', '_', $currenturl);
?>

<!-- Modal Signin & Signup - Mulai -->
  @include('bagikasih.modal.signin')
  @include('bagikasih.modal.signup')
<!-- Modal Signin & Signup - Selesai -->

{{ HTML::script('assets/components/bootstrap/dist/js/bootstrap.min.js'); }}
{{ HTML::script('js/credential.js'); }}
{{ HTML::script('assets/assets/js/bagikasih.js'); }}
