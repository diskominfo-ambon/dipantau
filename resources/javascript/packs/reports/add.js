import { createApp } from 'vue';

import '~/bootstrap';
import ListGroup from '~/components/list-group';
import ListReportItem from '~/components/reports/list-report-item';
import DailyFields from '~/components/reports/daily-fields';
import TimeFields from '~/components/reports/time-fields';
import useForm from '~/utils/use-form';



createApp({
  components: {
    DailyFields,
    TimeFields,
    ListGroup,
    ListReportItem
  },
  setup() {

    const form = useForm({
      name: ''
    });

    function handleOnSubmit() {}


    return {
      handleOnSubmit,
      form
    };

  }
}).mount('#app');
