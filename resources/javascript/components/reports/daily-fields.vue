<template>
  <div class="buysell-field form-group">
    <div class="form-label-group">
      <label class="form-label" for="title">Judul</label>
    </div>
    <text-input name="title" large required />
    <div class="form-note-group">
      <span class="form-note-alt">Pasktikan menggunakan judul yang jelas untuk kemudahan pencarian.</span>
    </div>
  </div>
  <div class="buysell-field form-group">
    <div class="form-label-group">
      <label class="form-label">Lokasi CCTV</label>
    </div>
    <select-input search/>
    <div class="form-note-group">
      <span class="form-note-alt">
      Masukan informasi lengkap tentang pemantauan (masalah & solusi).
      </span>
    </div>
  </div>

  <div class="buysell-field form-group mt-5">
    <div class="form-label-group">
        <label class="form-label">Kategori</label>
    </div>
    <div class="form-pm-group">
      <checkbox-group v-model="options">
          <checkbox-input labelText="Lalu lintas" value="lalu lintas" name="lalu-lintas" />
          <checkbox-input labelText="Bandungan" value="bendungan" name="bendungan" />
      </checkbox-group>
      <pre>
        {{ options }}
      </pre>
      <div class="form-note-group">
        <span class="form-note-alt">Laporan dapat memiliki lebih dari satu ketegori pemantauan.</span>
      </div>
    </div>
  </div>

  <div class="buysell-field form-group">
    <div class="form-label-group">
      <label class="form-label" for="description">Deskripsi</label>
    </div>
    <textarea-input name="description" autoresize large placeholder="......" required/>
    <div class="form-note-group">
      <span class="form-note-alt">
      Masukan informasi lengkap tentang pemantauan (masalah & solusi).
      </span>
    </div>
  </div>


  <div class="buysell-field form-group">
    <div class="form-label-group">
      <label for="" class="form-label">Upload berkas</label>
    </div>

    <uploader>
      endpoint=""
      v-slot="{ onInput, progress, isLoading, files, onClick, errors }">
      <uploadarea-input
        :disabled="isLoading" @input="onInput"/>
    </uploader>

    <div class="form-note-group">
      <span class="form-note-alt">
        Upload berkas laporan Anda, format yang disahkan <strong>pdf</strong> dan memiliki max <strong>5mb</strong>.
      </span>
    </div>
  </div>


</template>

<script>
import { defineComponent } from 'vue';
import TextareaInput from '~/components/inputs/textarea-input';
import TextInput from '~/components/inputs/text-input';
import CheckboxGroup from '~/components/inputs/checkbox-group';
import CheckboxInput from '~/components/inputs/checkbox-input';
import Uploader from '~/components/uploader';
import UploadboxInput from '~/components/inputs/uploadbox-input';

export default defineComponent({
  props: {
    submitText: String,
    modelValue: Object
  },
  components: {
    TextareaInput,
    TextInput,
    CheckboxInput,
    CheckboxGroup,
    Uploader,
    UploadboxInput,
  },
  data() {
    return {
      options: ['bendungan']
    }
  }
});
</script>
