import { createApp } from 'vue';

import '~/bootstrap';
import ReportFields from './report-fields';
import useForm from '~/utils/use-form';


createApp({
  components: {
    ReportFields
  },
  setup() {

  const form = useForm({});


  function handleOnSubmit() {}


  return {
    handleOnSubmit,
    form
  };

  }
}).mount('#app');
