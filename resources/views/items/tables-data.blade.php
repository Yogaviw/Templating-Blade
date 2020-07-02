@extends('admin.master')

@section('content')
<!-- include untuk table laman data.blade.php -->
@include('admin.partials.data')

@endsection
<!-- ini scripts dari stack master.blade -->
@push('scripts')
<script src="{{asset('/adminLTE/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush
