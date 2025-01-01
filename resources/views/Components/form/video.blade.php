<div>
    <input id="videoinput" type="file" name="videos[]" accept="video/*" id="" class="hidden" multiple>
    <h2 class="text-xl font-primary">
        Video
    </h2>
    <br>
    <div id="uploadVideo" class="w-[500px] h-[280px] border border-dashed border-2 border-gray-500 rounded cursor-pointer"></div>
    <br>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const videoinput = document.getElementById('videoinput');
        const uploadVideo = document.getElementById('uploadVideo');

        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventType => {
            uploadVideo.addEventListener(eventType, event => event.preventDefault());
        });

        uploadVideo.addEventListener('click', () => videoinput.click())

        const handleVideo = (e) => {
            const files = e.dataTransfer || videoinput.files;
            uploadVideo.innerHTML = ''

            Array.from(files).forEach(file => {
                const fileURL = URL.createObjectURL(file);
                const video = document.createElement('video');

                video.src = fileURL;
                video.alt = file.name;
                video.className = 'rounded w-[75px] h-[75px] object-cover m-2'
                uploadVideo.append(video)
            })
        }
        uploadVideo.addEventListener('drop', (e) => {
            handleVideo(e.dataTransfer)
        })
        videoinput.addEventListener('change', handleVideo)
    })
</script>