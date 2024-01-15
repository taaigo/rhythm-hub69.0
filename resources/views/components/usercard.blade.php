<div class="usercard_uploader">
    <img class="usercard_uploader_image" src="
    @if (file_exists('media/profile_pictures/'.$song->submitter_id.'.jpg'))
    {{ url('media/profile_pictures/'.$song->submitter_id.'.jpg') }}
    @else
    {{url('media/profile_pictures/default.jpg') }}
    @endif
    ">
    <div class="upload_info">
        <div class="text_sub">Submitted by: {{ $username }}</div>
        <div class="text_sub_grey">on {{$song->created_at}}</div>
    </div>
</div>