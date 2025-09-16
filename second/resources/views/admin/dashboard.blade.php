@extends('admin.layouts.app')

@section('title', $pageseo ? $pageseo->meta_title : 'Dashboard')
@section('keywords', $pageseo ? $pageseo->meta_keywords : 'Dashboard, Dashboard')
@section('description', $pageseo ? $pageseo->meta_description : 'Dashboard')

@section('content')

@endsection


@push('modal')
@endpush


@push('scripts')
@endpush
