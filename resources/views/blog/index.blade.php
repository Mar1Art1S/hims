@extends('layouts.base')

@section('content')

    <x-section class="container mx-auto">
        <div class="my-12">
            <x-slot:caption>
                {{ __('Блог') }}
            </x-slot>
        </div>
        <x-decor.card>
            <h1>Blog</h1>
            <ul>
                @foreach ($posts as $post)
                    <li>
                        <a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a>
                    </li>
                @endforeach
            </ul>
{{--            <div class="group flex rounded-xl max-w-sm flex-col overflow-hidden border border-slate-300 bg-slate-100 text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300">--}}
{{--                <div class="h-44 md:h-64 overflow-hidden">--}}
{{--                    <img src="https://penguinui.s3.amazonaws.com/component-assets/card-img-1.webp"--}}
{{--                         class="object-cover transition duration-700 ease-out group-hover:scale-105"--}}
{{--                         alt="a penguin robot talking with a human"/>--}}
{{--                </div>--}}
{{--                <div class="flex flex-col gap-4 p-6">--}}
{{--                    <span class="text-sm font-medium">Features</span>--}}
{{--                    <a href="#"><h3--}}
{{--                                class="text-balance text-xl lg:text-2xl font-bold text-black dark:text-white hover:text-blue-800"--}}
{{--                                aria-describedby="featureDescription">Penguai can teach you Javascript</h3></a>--}}

{{--                    <p class="text-pretty text-sm">--}}
{{--                        Learning JavaScript doesn't need to be difficult. Our penguin AI--}}
{{--                        robot can learn how much you know and will go at your speed.--}}
{{--                        Although Penguai is small, he's got a mighty big CPU.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}

        </x-decor.card>

    </x-section>

@endsection
