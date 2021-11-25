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

  FilePond.create($filepond);

  // Mengatur konfigurasi label bahasa.
  FilePond.setOptions(id);

  FilePond.setOptions({
    allowMultiple: true,
    instantUpload: true,
    maxFileSize: '2MB',
    acceptedFileTypes: ['application/pdf'],
    fileValidateTypeLabelExpectedTypes: 'File memiliki format yang tidak diperbolehkan',
    onaddfile() {
      console.log('on add');
    },
    onprocessfile() {
      console.log('proccess file');
    },
    server: {
      url: window.location.origin + '/attachments',
      headers: {
        'X-CSRF-TOKEN': document
          .querySelector('meta[name="csrf-token"]')
          .getAttribute('content'),
      }
    }

  });
});


function onloaded(res) {
  console.log({res});
  console.log('onload');
  return res.key;
}

function onerror() {
  console.log('error');
}
