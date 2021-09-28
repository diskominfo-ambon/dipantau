import { defineComponent, h,  } from 'vue';
import ListItem from '~/components/list-item';

export default defineComponent({
  name: 'ListReportItem',
  props: {
    data: {
      type: Object,
      default: {}
    }
  },
  setup(props, {emit}) {
    const handleDelete = () => {
      emit('ondelete');
      alert('on delete');
    }

    return {
      handleDelete
    }
  },

  render() {

    const $span = h(
      'span',
      'Lalu lintas • Pukul 02:30 WIT' // TODO: buat informasi bedasarkan dari data.
    );

    const $badge = h(
      'span',
      {
        class: [
          'badge',
          'badge-dim',
          'badge-warning',
          'border',
          'mt-1',
          'badge-sm'
        ]
      },
      'Macet'
    );

    const $content = h(
      'div',
      {
        class: [
          'd-flex',
          'flex-column',
          'align-items-start',
        ]
      },
      [$span, $badge]
    )

    const $button = h(
      'button',
      {
        class: [
          'btn',
          'btn-icon',
          'btn-danger' ,
          'btn-sm'
        ],
        type: 'button',
        onClick: this.handleDelete
      },
      h('em', // mengunakan button icon
        {
          class: [
            'icon',
            'ni-cross',
            'ni'
          ]
        }
      )
    );

    return h(
      ListItem,
      {
        class: [
          'd-flex',
          'align-items-center',
          'justify-content-between'
        ]
      },
      [$content, $button]
    );
  }

});
