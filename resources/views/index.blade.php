@extends('layouts.default')

@section('content')
    <div class="background-container" >
        @include('includes.navbar')

        <div class="d-flex col px-0 background-container2">
            @include('includes.sidebar')
            @include('quotes')
            @include('videos')
            @include('favorites')
            {{-- @include('funny') --}}
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content round-17px">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              <div class="modal-body p-0">
                <div class="blue-box-bg">
                     <div @click="openModal">
                         <div class="text-center">
                             <img class="sample-img" src="/images/sample-video.jpg">
                         </div>
                     </div>
                     <div class="d-flex">
                         <div class="col mt-3">
                             <span class="author">Lorem ipsum</span>
                         </div>
                         <div class="col py-3 text-right iconsModal">
                             <button><i class="fas fa-save"></i></button>
                             <button><i class="fa fa-heart-o mx-3" aria-hidden="true"></i></button>
                             <button @click="share('video1')"><i class="fa fa-share" aria-hidden="true"></i></button>
                         </div>
                     </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body p-0">
                    <div class="blue-box-bg p-3">
                         <div class="mt-3" @click="openModal">
                             <div class="text-center">
                                 <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                 <small class="author">Lorem ipsum</small>
                             </div>
                         </div>
                         <div class="d-lg-flex d-md-flex d-none mt-3">
                             <div class="col mt-3">
                                 <span class="author">Lorem ipsum</span>
                             </div>
                             <div class="col py-3 text-right iconsModal">
                                 <button><i class="fas fa-save"></i></button>
                                 <button><i class="fa fa-heart-o mx-3" aria-hidden="true"></i></button>
                                 <button @click="share('video1')"><i class="fa fa-share" aria-hidden="true"></i></button>
                             </div>
                         </div>
                         <div class="d-lg-none d-md-none d-block">
                             <div class="text-center iconsModal">
                                 <button><i class="fas fa-save"></i></button>
                                 <button><i class="fa fa-heart mx-5" aria-hidden="true"></i></button>
                                 <button @click="share('video1')"><i class="fa fa-share" aria-hidden="true"></i></button>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="categoriesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content mx-auto">
                <div class="modal-header">
                    <div class="col-12 px-0">
                        <div class="mx-auto text-center">
                            <button class="filter mr-3" :class="{'active': activeTab == 'quotes'}" @click="switchTab('quotes')">Quotes</button>
                            <button class="filter" :class="{'active': activeTab == 'videos'}" @click="switchTab('videos')">Videos</button>
                        </div>
                    </div>
                    <button type="button" class="close-modal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    @foreach ($categories as $category)
                    <label class="dropdown-item mb-0">
                       <input type="radio" name="category" value="Funny" v-model="category">
                       <span>{{ $category->name }}</span>
                    </label>
                    @endforeach
                </div>
                <div class="modal-footer px-0 mt-3">
                    <button class="apply-button py-2" :disabled="!category" @click="applyCategory">Apply</button>
                </div>
            </div>
        </div>
    </div>
    {{-- </template> --}}

    @section('extra_scripts')


    @endsection
@endsection
