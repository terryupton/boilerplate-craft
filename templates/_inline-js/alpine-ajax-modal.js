function ajaxModal() {
  return {
    showModal: false,
    html: '',
    showLoading: false,
    tab: '1',
    
    openModal(url) {
      this.html = 'loading...';
      this.showLoading = true;
      this.showModal = !this.showModal;
      
      fetch(url, {
        method: 'GET',
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
        },
      })
          .then(response => response.text())
          .then(text => {
            this.html = text;
            this.showLoading = false;
          });
    }
  };
};

// x-data="{ tab: '1', ...setInitialStates() }"