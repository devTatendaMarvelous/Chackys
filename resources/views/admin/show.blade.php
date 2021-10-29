<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                 
     
	<!--Page Title-->
    
    <!--End Page Title-->
    
    <!--Projects Single Section-->
    <section class="project-single-section">
    	<div class="auto-container">
        	<div class="upper-section">
                    <div class="row">
                        
                        <span class="col-6"><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></span>
                        <span class="col-6"><a href="/posts/{{$post->id}}/delete" class="btn btn-danger">Delete</a></span>
                    
                    </div>
            	<div class="row clearfix">
                	
                    <!--Image Column-->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    	<div class="image">
                        	<img src="/storage/postFiles/{{$post->main}}" alt="" />
                        </div>
                    </div>
                    
                    <!--Info Column-->
                    <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    	<div class="inner-column">
                        	<h2><span class="theme_color">Project</span> Information</h2>
                            
                            <ul class="info-list">
                            	<li><span>Titile:</span>{{$post->title}}</li>
                                
                                <li><span>Description:</span></li>
                            </ul>
                            <div class="text">{{$post->descrption}}</div>
                        </div>
                    </div>
                    
                </div>
                
                <!--Lower Section-->
                <div class="lower-section">
                    <div class="row clearfix">
                        
                        <!--Content Column-->
                        <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        	<div class="inner-column">
                            	<h2>Other Media</h2>
                                <img src="/storage/postFiles/{{$post->main}}" alt="" />
                            </div>
                        </div>
                        
                        <!--Contact Column-->
                        <div class="contact-column col-lg-4 col-md-12 col-sm-12">
                        	<div class="inner-column" style="background-image:url(images/background/pattern-1.png)">
                            	<img src="/storage/postFiles/{{$post->main}}" alt="" />
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Projects Single Section-->
    
                
            </div>
        </div>
    </div>
</x-app-layout>
