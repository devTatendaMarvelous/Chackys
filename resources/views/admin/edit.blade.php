<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {!! Form::open(['action'=>'App\Http\Controllers\PostsController@update', 'method'=>'POST','enctype'=>'multipart/form-data'])!!}

                          <div class="form-group row">
                              {{Form::label('title','Post Title:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                   
                              <div class="col-md-6 ">
                                   {{Form::text('title', $post->title, ['class'=>'form-control','placeholder'=>'Product Title','required','autofocus'])}}
                              </div>
                         </div>

                         <div class="form-group row">
                              {{Form::label('description','Description:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                   
                              <div class="col-md-6 ">
                                   {{Form::textarea('description', $post->descrption, ['class'=>'form-control','placeholder'=>'Description','required'])}}
                              </div>
                         </div>
                         <div class="form-group row">
                              {{Form::label('main','Main Photo:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                   
                             <div class="col-md-6 ">
                                   {{Form::file('main',  ['class'=>'form-control', 'required'])}}
                              </div>
                         </div>
                          
                         <div class="form-group row">
                               {{Form::label('pic1','Pic 1:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                             
                              <div class="col-md-6 ">
                                   {{Form::file('pic1',  ['class'=>'form-control', 'required'])}}
                              </div>
                         </div>

                         {{Form::hidden('_method','Put')}}
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {{Form::submit('Update',['class'=>'btn btn-primary'])}}
                            </div>
                        </div>
                    {!! Form::close()!!}
            </div>
        </div>
    </div>
</x-app-layout>
