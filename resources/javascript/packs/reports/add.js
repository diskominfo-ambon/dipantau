import { createApp } from 'vue';

import '~/bootstrap';
import ListGroup from '~/components/list-group';
import ListItem from '~/components/list-item';
// import useForm from '~/utils/use-form';



createApp({
  components: {
    // DailyFields,
    // TimeFields,
    ListGroup,
    ListItem
  },
  setup() {

    // const form = useForm({});

    function handleOnSubmit() {

    }


    return {
      handleOnSubmit
    };

  }
}).mount('#app');
