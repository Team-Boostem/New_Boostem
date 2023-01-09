{{-- push title --}}
@push('title')
    <title>User Profile</title>
    <link href="{{ asset('public/cork/html/src/assets/css/light/pages/knowledge_base.css')}}" rel="stylesheet" type="text/css" /> 
    <script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>
@endpush

{{-- push styles --}}
@push('styles')
<style>
</style>
@endpush

{{-- push scripts --}}
@push('scripts')
<script type="text/javascript">

    $("#newsletter_btn").click(function(){
            console.log('hii')
            //var email_id as the value of input with name newsletter 
            var email_id = $("#newsletter_inp").val();
            // send ajax request
            $.ajax({
                url: "{{ route('newsletter.save') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "email_id": email_id,
                },
                success: function(response) {
                    console.log(response);
                    if (response.status == 200) {
                        $("#newsletter-status").html(response);
                        
                    } else {
                        $("#newsletter-status").html(response);
                        $("#newsletter_row").hide();
                    }
                }
            });
        }
    );
        
    </script>
@endpush

{{-- extend and yield content --}}
@extends('layouts/community-dashboard')
@section('content')
   <div class="main-box">
    <div id="search-status"></div>
    <div>
        <div class="fq-header-wrapper">
            <div class="container">
                @if (subscribeNewsletterStatus())
                @else
                    <div class="alert alert-success" id="newsletter-status"></div>
                    <div class="row" id="newsletter_row">
                        <div class="col-md-12 align-self-center order-md-0 order-1">
                            <div class="faq-header-content">
                                <h1 class="mb-4">Subscribe to newsletter</h1>
                                <div class="row">
                                    <div class="col-lg-5 mx-auto">
                                        <div class="autocomplete-btn">
                                            <input id="newsletter_inp" type="email"  class="form-control"
                                                @auth
                                                    value="{{ Auth::user()->email }}"
                                                @endauth
                                            >
                                            <button type="button" id="newsletter_btn" class="btn btn-primary">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4 mb-0">Search instant answers & questions asked by popular users</p>
                            </div>
                        </div>
                    </div>
                @endif
                
            </div>
        </div>
    </div>

    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, quo veniam quibusdam quidem modi est ducimus odio magni eius aspernatur ratione dolorum, odit natus itaque blanditiis delectus fuga hic soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum aut inventore beatae odit ut perspiciatis ullam voluptatem soluta dignissimos vel? Deserunt amet tempore molestias debitis labore voluptatum exercitationem dolorem accusamus, voluptas ex! Provident nulla fugiat ab veniam ad officia perferendis delectus saepe. Molestiae aliquid mollitia neque inventore assumenda dolorum architecto suscipit officia accusantium! Blanditiis iusto ducimus quod quaerat aut, modi labore voluptatum voluptates incidunt similique earum asperiores alias eius quam velit! Odit amet magni officia dolorem iusto cumque iste sequi nulla ducimus velit ratione voluptatem eius tempore delectus, doloremque, quas vel corrupti optio accusamus quibusdam, harum recusandae! Cumque dolorem natus debitis error dolore suscipit quia possimus quis quidem tenetur, eveniet quae eius? Consequuntur consequatur, expedita doloribus dolor aliquid iure eveniet odit corporis, animi magnam eius ab architecto. Deleniti mollitia magni officiis veritatis exercitationem commodi quae quam voluptatibus distinctio. Quisquam nulla ut non harum qui dolore omnis quidem, nam accusamus aspernatur obcaecati totam? Architecto tempore ipsa, repellendus debitis earum quis dolor libero est error, voluptatibus excepturi quo facere suscipit incidunt quod expedita nisi! Temporibus ratione voluptas doloribus animi reiciendis? Nam dolorem aspernatur, doloremque aliquid perspiciatis esse excepturi totam eos dignissimos rerum tempore, porro quis quidem sunt ut deserunt autem similique facere nesciunt asperiores tempora nostrum aut molestias laudantium! At tempore cumque aperiam dicta sint quasi enim, incidunt placeat quisquam a laboriosam iusto, quos quae distinctio architecto nisi sed, dolorum consectetur odit ab dolor voluptas? Tempore id, sit reiciendis aperiam aut a officia ratione dolorum cumque hic vero dolores ipsa placeat asperiores sequi! Dignissimos fugiat porro eos possimus neque error molestias sunt quaerat at quia, impedit voluptates dolorum corporis earum aspernatur dolore vel consequatur hic, optio sit amet provident magni recusandae. Fugit quia ducimus optio eum, nostrum aspernatur maiores nisi. Aut voluptatem maiores ipsam consectetur natus quae sint, quod eligendi tempore consequuntur quas quidem commodi et provident adipisci atque, perspiciatis tempora? Accusantium, velit ut? Non, tempore. Similique, blanditiis. Voluptates qui reiciendis maiores. Quasi neque asperiores officia dolore laudantium! Natus modi numquam id illo sed. Incidunt assumenda error aperiam et, nostrum distinctio, nemo maxime quas eum laudantium ullam nam, ut debitis sequi. Quos aperiam necessitatibus repellat distinctio. Temporibus rem aliquid, quidem maiores explicabo architecto, necessitatibus harum, autem distinctio ullam quas beatae aspernatur vel voluptatum itaque ab. Aliquid impedit consequuntur similique error illo nobis eos vitae quibusdam porro perspiciatis illum quaerat consequatur, assumenda voluptatem ipsa? Cum odio vel quisquam deserunt dignissimos explicabo, voluptates temporibus consequuntur nemo expedita earum. Molestiae similique fuga doloremque. Blanditiis vel quo, natus cumque ipsum vero minima modi perferendis officia. Dolorem, unde sint nemo earum soluta saepe placeat atque dolorum minima vel repudiandae neque deleniti dicta error a? Voluptatum temporibus esse dolores repellendus praesentium, voluptates asperiores molestiae sunt eveniet officia provident voluptate eum quidem quia libero nobis? Omnis autem consectetur nihil distinctio incidunt a quibusdam rerum neque. Rerum repellendus nam veritatis temporibus earum tenetur ipsam eligendi facere molestiae. Optio corrupti architecto enim officiis, iusto possimus quia? Omnis, enim quod! Quia, magni ab nulla nemo deleniti explicabo quaerat dolorum a tenetur quas?
   </div>
@endsection