<div v-if="activeTab === 'videos'" class="d-lg-flex d-md-block d-block col-lg-10 col-md-9 col-12 px-0 pr-0 py-lg-4 py-md-3 py-3 background-container3">
    <div class="col-lg-4 px-lg-5 px-md-5 px-4">
        <h1 class="mt-lg-5 mt-md-5 text-lg-center text-md-center text-left title">Videos</h1>
        @foreach($videos as $video)
            <div id="video1">
                <div class="shareButtons-day share-video d-none">
                    <div class="row">
                        <button class="copy mr-3">
                            <i class="far fa-clone"></i><br>
                            <small>Copy link</small>
                        </button>
                        <button class="email">
                            <i class="fas fa-envelope"></i><br>
                            <small>Email</small>
                        </button>
                    </div>
                    <button @click="closeShare('video1')" class="close-btn-day py-2 px-5"><span>Close</span></button>
                </div>
                <div class="blue-box-bg quote-day-border mt-3">
                    <div @click="openModal">
                        <div class="p-4">
                            <i class="fa fa-calendar text-center" aria-hidden="true"></i><small class="ml-5 quote-day"> Video of the day</small>
                        </div>
                        <div class="text-center">
                            <img class="sample-img-day" src="/images/sample-image.jpg">
                            <small class="author">Lorem ipsum</small>
                        </div>
                    </div>
                    <div class="text-center my-3">
                        <button><i class="fas fa-save"></i></button>
                        <button><i class="fa fa-heart-o mx-5" aria-hidden="true"></i></button>
                        <button @click="share('video1')"><i class="fa fa-share" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="mt-3 d-lg-none d-md-none d-block">
            <small class="gray-text"><b>Sponsored</b></small>
            <div class="text-center">
                <img class="sponsored-img" src="/images/tiktok.png">
            </div>
        </div>
        <div id="video2">
            <div class="shareButtons-day shareButtons d-none">
                <div class="row">
                    <button class="copy mr-3">
                        <i class="far fa-clone"></i><br>
                        <small>Copy link</small>
                    </button>
                    <button class="email">
                        <i class="fas fa-envelope"></i><br>
                        <small>Email</small>
                    </button>
                </div>
                <button @click="closeShare('video1')" class="close-btn py-2 px-5"><span>Close</span></button>
            </div>
            <div class="blue-box-bg mt-4">
                 <div class="text-center" @click="openModal">
                     <img class="sample-img" src="/images/sample-video.jpg">
                     <small class="author">Lorem ipsum</small>
                 </div>
                 <div class="text-center py-3">
                     <button><i class="fas fa-save"></i></button>
                     <button><i class="fa fa-heart-o mx-5" aria-hidden="true"></i></button>
                     <button @click="share('video1')"><i class="fa fa-share" aria-hidden="true"></i></button>
                 </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 px-lg-5 px-md-5 px-4">
        <div class="blue-box-bg mt-4" v-for="index in 3">
             <div class="text-center" @click="openModal">
                 <img class="sample-img" src="/images/sample-video.jpg">
                 <small class="author">Lorem ipsum</small>
             </div>
             <div class="text-center py-3">
                 <button><i class="fas fa-save"></i></button>
                 <button><i class="fa fa-heart-o mx-5" aria-hidden="true"></i></button>
                 <i class="fa fa-share" aria-hidden="true"></i>
             </div>
        </div>
    </div>
    <div class="col-lg-4 px-lg-5 px-md-5 px-4">
        <div class="blue-box-bg mt-4" v-for="index in 3">
             <div class="text-center" @click="openModal">
                 <img class="sample-img" src="/images/sample-video.jpg">
                 <small class="author">Lorem ipsum</small>
             </div>
             <div class="text-center py-3">
                 <button><i class="fas fa-save"></i></button>
                 <button><i class="fa fa-heart-o mx-5" aria-hidden="true"></i></button>
                 <i class="fa fa-share" aria-hidden="true"></i>
             </div>
        </div>
    </div>
</div>
