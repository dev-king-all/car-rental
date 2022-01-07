var openItems = JSON.parse($('.Open').text())
var progressItems = JSON.parse($('.InProgress').text())
var stagedItems = JSON.parse($('.Staged').text())
var declinedItems = JSON.parse($('.Declined').text())
function n(n, a, s) {
  s = 2 < arguments.length && void 0 !== s ? s : 'more-h'
  return '\n                <div class="kanban-title-content">\n                    <h6 class="title">'
    .concat(
      n,
      '</h6>\n                    <span id = "count-' + n.substr(0,1) + '" class="badge badge-pill badge-outline-light text-dark">',
    )
    .concat(
      a,
      '</span>\n                </div>\n                <div class="kanban-title-content">\n',
    )
}
var kanban = new jKanban({
  element: '#kanban',
  gutter: '0',
  widthBoard: '320px',
  responsivePercentage: !1,
  boards: [
    {
      id: 'open',
      title: n('Open', openItems.length),
      class: 'kanban-success',
      item: openItems,
    },
    {
      id: 'inProgress',
      title: n('In Progress', progressItems.length),
      class: 'kanban-warning',
      item: progressItems,
    },
    {
      id: 'stage',
      title: n('Staged', stagedItems.length),
      class: 'kanban-primary',
      item: stagedItems,
    },
    {
      id: 'decline',
      title: n('Declined', declinedItems.length),
      class: 'kanban-danger',
      item: declinedItems,
    },
  ],
  click: function (el) {}, // callback when any board's item are clicked
  context: function (el, event) {}, // callback when any board's item are right clicked
  dragEl: function (el, source) {}, // callback when any board's item are dragged
  dragendEl: function (el) {}, // callback when any board's item stop drag
  dropEl: function (el, target, source, sibling) {
    let eid = $(el).data('eid')
    let tid = $(target).parent().data('id')
    let url = document.location.origin + '/recruitment/' + tid + '/' + eid
    let _token = $('#_token').val()
    $.post(url, { _token }, function (data) {
      if (data) {
        var count = $(target)
          .parent()
          .children()
          .first()
          .children()
          .first()
          .children()
          .find('span')
        $(count).text(Number($(count).text()) + 1)
        var count2 = $(source)
          .parent()
          .children()
          .first()
          .children()
          .first()
          .children()
          .find('span')
        $(count2).text(Number($(count2).text()) - 1)
        console.log(data)
      }
    })
  }, // callback when any board's item drop in a board
  dragBoard: function (el, source) {}, // callback when any board stop drag
  dragendBoard: function (el) {}, // callback when any board stop drag
  buttonClick: function (el, boardId) {},
})
function loadMoreData(page) {
  $.ajax({
    url: '?page=' + page,
    type: 'get',
    beforeSend: function () {
      $('#loading').show()
    },
  })
    .done(function (data) {
      if (data.html == ' ') {
        return
      }
      $('#loading').hide()
      // console.log(data);
      var open = JSON.parse(data.open);
      var inProgress = JSON.parse(data.inProgress);
      var staged = JSON.parse(data.staged);
      var declined = JSON.parse(data.declined);
      if (open.length > 0)
        open.forEach(function(item){
          kanban.addElement('open', item);
          $('#count-O').text(Number($('#count-O').text()) + 1);
        });
      if (inProgress.length > 0)
        inProgress.forEach(function(item){
          kanban.addElement('inProgress', item);
          $('#count-I').text(Number($('#count-I').text()) + 1);
        });
      if (staged.length > 0)
        staged.forEach(function(item){
          kanban.addElement('stage', item);
          $('#count-S').text(Number($('#count-S').text()) + 1);
        });
      if (declined.length > 0)
        declined.forEach(function(item){
          kanban.addElement('decline', item);
          $('#count-D').text(Number($('#count-D').text()) + 1);
      });
      if (open.length + inProgress.length + staged.length + declined.length == 0) {
        
      }
    })
    .fail(function (jqXHR, ajaxOptions, thrownError) {
      alert('server not responding...')
    })
}
$(document).ready(function () {
  $('#loading').hide()
  var page = 1
  $(window).scroll(function () {
    if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
      page++
      loadMoreData(page)
    }
  })
  // kanban.addElement('open', 'New Item')
})
