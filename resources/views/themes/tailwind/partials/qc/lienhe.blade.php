@extends('theme::layouts.app_qc')

@section('content')

<main id="contact-wrapper">
    <div class="container-master">
        <div class="box-contact">
            <div class="contact-map">
                <div class="mapouter">
                    {!! setting('site.map') !!}
                </div>
            </div>
            <div class="contact-form">
                <h1 class="contact-title">Liên hệ</h1>
                <p>Nếu bạn có câu hỏi hoặc yêu cầu thực hiện dự án, xin vui lòng điền đủ các thông tin dưới đây</p>
                <form
                    action="{{ route('contact.home') }}"
                    method="POST"
                    class="form-contact">
                    @csrf
                    <div class="form-contact">
                        <div class="row-input">
                            <div class="box-input">
                                <label>TÊN <span>*</span></label>
                                <input type="text" placeholder="" name="name" class="" required/>
                            </div>
                            <div class="box-input">
                                <label>ĐIỆN THOẠI<span>*</span></label>
                                <input
                                    type="text"
                                    placeholder=""
                                    id="phone"
                                    name="phone"
                                    required
                                    class="" />
                            </div>
                            <div class="box-input">
                                <label>EMAIL <span>*</span></label>
                                <input type="email" placeholder="" name="email" required class="" />
                            </div>
                        </div>
                        <div class="box-input">
                            <label>NỘI DUNG<span>*</span></label>
                            <textarea name="content" class="" required></textarea>
                        </div>
                    </div>
                    <div class="btn-send">
                        <button style="color: #fff;padding:10px;" type="submit" class="btn-submit" value="Gửi mẫu">Gửi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection