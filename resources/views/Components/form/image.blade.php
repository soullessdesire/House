<div>
    <input id="imageinput" type="file" name="images[]" accept="image/*" id="" class="hidden" multiple>
    <h2 class="text-xl font-primary">
        Image
    </h2>
    <br>
    <div id="uploadImage" class="w-[500px] h-[280px] flex flex-wrap border border-dashed border-2 border-gray-500 rounded cursor-pointer m-2 p-2"></div>
    <br>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const uploadImage = document.getElementById('uploadImage')
        const imageinput = document.getElementById('imageinput')

        const dragEvents = ['dragenter', 'dragover', 'dragleave'];
        uploadVideo.addEventListener('drop', (e) => {
            console.log(e)
            handleImage(e.dataTransfer)
        })
        dragEvents.forEach(eventType => {
            uploadImage.addEventListener(eventType, event => event.preventDefault());
        });

        const handleImage = (e) => {
            const files = e.dataTransfer || imageinput.files;
            console.log(files)
            uploadImage.innerHTML = ""

            Array.from(files).forEach(file => {
                const fileURL = URL.createObjectURL(file);

                const image = document.createElement('img')
                image.src = fileURL
                image.alt = file.name
                image.className = 'rounded w-[75px] h-[75px] object-cover m-2'
                uploadImage.append(image);
            })
        }
        uploadImage.addEventListener('click', () => imageinput.click())
        imageinput.addEventListener('change', handleImage)

    })
</script>