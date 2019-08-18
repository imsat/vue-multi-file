<template>
    <div class="container">
        <div class="row justify-content-center my-2">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Select Page</div>
                    <div class="card-body">
                        <select-page></select-page>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-2">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Multiple File Uploader</div>
                    <div class="card-body">
                        <file-uploader></file-uploader>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center my-4">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Multiple Image Uploader</div>
                    <div class="card-body">
                        <image-uploader></image-uploader>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import ImageUploader from './ImageUploader';
    import FileUploader from './FileUploader';
    import SelectPage from './SelectPage';
    export default {
        components: {
            ImageUploader,
            FileUploader,
            SelectPage
        }
    }
</script>
