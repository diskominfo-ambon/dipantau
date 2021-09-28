
export const autoResizeInput = (el) => {
  el.setAttribute('style', 'height: auto;');
  el.setAttribute('style', `height: ${el.scrollHeight}px !important;`);
}
