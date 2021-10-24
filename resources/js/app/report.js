import * as FilePond from 'filepond';
import id from 'filepond/locale/id-id';
import 'filepond/dist/filepond.min.css';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';
import FilePondPluginFileValidateSize from 'filepond-plugin-file-validate-size';

FilePond.registerPlugin(
  FilePondPluginFileValidateSize,
  FilePondPluginFileValidateType,
);

document.addEventListener('DOMContentLoaded', () => {
  const $filepond = document.querySelector('.my-pond');


  FilePond.setOptions({
    ...id,
    allowMultiple: true,
    maxFileSize: '2MB',
    maxParallelUploads: true,
    acceptedFileTypes: ['application/pdf'],
    fileValidateTypeLabelExpectedTypes: 'File memiliki format yang tidak diperbolehkan',
    required: true,
    server: {
      url: '',
      process: {
        url: '',
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute('content'),
        }
      }
    }

  });

  FilePond.create($filepond);
});
