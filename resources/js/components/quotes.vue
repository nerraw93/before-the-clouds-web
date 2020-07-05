<template>
    <div class="grid mr-0 ml-auto">
        <div class="grid-sizer col-lg-3 col-md-9 col-11"></div>
        <div class="grid-item col-lg-3 col-md-9 col-11 ml-lg-5 mt-lg-5 mt-md-2 mt-4 mb-3 px-0">
            <h1 class="text-lg-center text-md-center text-left title">Quotes</h1>
            <div id="quote1" >
                <div class="shareButtons-day d-none">
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
                    <button @click="closeShare('quote1')" class="close-btn-day py-2 px-5"><span>Close</span></button>
                </div>
                <div class="blue-box-bg quote-day-border p-4">
                    <div @click="openQuoteModal">
                        <div>
                            <i class="fa fa-calendar text-center" aria-hidden="true"></i><small class="ml-5 quote-day"> Quote of the day</small>
                        </div>
                        <div class="text-center mt-4">
                            <p class="mb-0">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
                            <small class="author">Lorem Ipsum</small>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button><i class="fas fa-save"></i></button>
                        <i class="fa fa-heart-o mx-5" aria-hidden="true"></i>
                        <button @click="share('quote1')"><i class="fa fa-share" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <template v-for="(quote, index) in quotes"  >
             <div class="grid-item col-lg-3 col-md-9 col-11 mb-3 ml-lg-5 px-0" :key="index">
            <div class="shareButtons-day d-none">
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
                <button @click="closeShare('quote{{ quote.id }}')" class="close-btn-day py-2 px-5"><span>Close</span></button>
            </div>

            <div class="blue-box-bg p-4 mt-lg-3 mt-md-4 mt-4">
                <div class="text-center mt-3" >
                    <p class="mb-0"> {{ quote.quotes }} </p>
                    <small class="author"> {{ quote.author }} </small>
                </div>
                <div class="text-center mt-3">
                    <button><i class="fas fa-save"></i></button>
                    <i class="fa fa-heart mx-5" aria-hidden="true"></i>
                    <button ><i class="fa fa-share" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        </template>
    </div>
</template>

<script>
export default {
    name: 'QuoteList',

    props: {
        quotes: {
            type: Array
        },
        categoryId: {
            type: [Number, Text]
        }
    }
}
</script>
