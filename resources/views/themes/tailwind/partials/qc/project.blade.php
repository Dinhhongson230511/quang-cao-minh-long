@extends('theme::layouts.app_qc')

@section('content')
<main id="project-wrapper">
    <section class="section-project">
        <div class="section-project-head">
            <div class="container-master">
                <h1 class="project-title">{{ $category->name }}</h1>
                <!-- <div class="project-action">
                    <p><span>Tìm kiếm</span></p>
                    <form class="form-contact" data-request="onSubmitFilterCate" data-request-flash="">
                        <div class="box-input">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <select name="cate" id="cate-filter">
                                <option data-url="https://afa.com.vn/categories/van-phong" value="51">Văn phòng</option>
                                <option data-url="https://afa.com.vn/categories/thiet-ke-van-phong" value="44">Văn phòng</option>
                                <option data-url="https://afa.com.vn/categories/thiet-ke-nha-o" value="43">Nhà ở</option>
                                <option data-url="https://afa.com.vn/categories/thiet-ke-truong-hoc" value="45">Trường học</option>
                                <option data-url="https://afa.com.vn/categories/du-an-khac" value="35">Dự án khác</option>
                                <option data-url="https://afa.com.vn/categories/du-an" value="40">Tất cả dự án</option>
                            </select>
                        </div>
                        <div class="btn-send">
                            <input type="submit" id="submit-cate" class="btn-submit" style="display:none;">
                        </div>
                    </form>
                </div> -->
            </div>
        </div>
        <div class="section-project-content">
            @foreach($posts as $post)
                <div class="box-item">
                    <a href="{{ $post->link() }}" rel="follow" class="item imgc" title="{{ $post->title }}" target="_blank">
                        <span style="text-transform: uppercase;">{{ $post->title }}</span>
                        <img src="{{ $post->image() }}" alt="" title="">
                    </a>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center my-10">
            {{ $posts->links('theme::partials.pagination') }}
        </ul>
    </section>
</main>

@endsection
