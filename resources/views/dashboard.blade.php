
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                 
                  <!--Project Section-->
    <section class="project-section" style="background-image:url(images/background/3.jpg)">
    	<div class="auto-container">
        
        	<!--Porfolio Tabs-->
            <div class="project-tab">
                <!--Sec Title-->
                <div class="sec-title light">
                	<div class="clearfix">
                        <div class="pull-left">
                            {{-- <div class="title">Our Best Work</div> --}}
                            <h2>Available Posts</h2>
                        </div>
                        <div class="tab-btns-box pull-right">
                            <!--Tabs Header-->
                            <div class="tabs-header">
                                <ul class="product-tab-btns clearfix">
                                    <li class="p-tab-btn active-btn" data-tab="#p-tab-1">All</li>
                                    {{-- <li class="p-tab-btn" data-tab="#p-tab-2">Renovation</li>
                                    <li class="p-tab-btn" data-tab="#p-tab-3">Isolation</li>
                                    <li class="p-tab-btn" data-tab="#p-tab-4">Construction</li>
                                    <li class="p-tab-btn" data-tab="#p-tab-5">Architecutre </li> --}}
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <!--Tabs Content-->  
                <div class="p-tabs-content">
                
                    <!--Portfolio Tab / Active Tab-->
                    <div class="p-tab active-tab" id="p-tab-1">
                        <div class="project-carousel owl-theme owl-carousel">
						@foreach ($posts as $post)
                        	<!--Project Block-->
                        	<div class="project-block">
                            	<div class="inner-box">
                                	<div class="image">
                                    	<img src="/storage/postFiles/{{$post->main}}" style="max-height: 600px; max-width:600px;" />
                                        <div class="overlay-box">
                                        	<div class="content">
                                            	<h3>{{$post->title}}</h3>
                                                <div class="see-project"> <a href="/posts/{{$post->id}}/show" class="see-more">See Project <span class="fa fa-angle-right"></span></a></div>
                                            </div>
                                        </div>
                                        <!--Overlay Two-->
                                        <div class="overlay-two">
                                        	<div class="overlay-two-inner">
                                            	<div class="overlay-two-content">
                                                	<h2><a href="projects-single.html">{{$post->title}}</a></h2>
                                                    <div class="text">{{$post->descrption}}</div>
                                                    <a href="/posts/{{$post->id}}/show" class="see-more">See Project <span class="fa fa-angle-right"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            @endforeach
                        
                        </div>
                    </div>
                    
                    
                    
                </div>
                
            </div>
        </div>
    </section>
                
            </div>
        </div>
    </div>
</x-app-layout>
