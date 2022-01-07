'use strict'
!(function (n, l) {
  var openItems = JSON.parse($('.Open').text())
  var progressItems = JSON.parse($('.InProgress').text())
  var stagedItems = JSON.parse($('.Staged').text())
  var declinedItems = JSON.parse($('.Declined').text())
  l(window), l('body'), n.Break
  ;(n.Kanban = function () {
    function n(n, a, s) {
      s = 2 < arguments.length && void 0 !== s ? s : 'more-h'
      return '\n                <div class="kanban-title-content">\n                    <h6 class="title">'
        .concat(
          n,
          '</h6>\n                    <span class="badge badge-pill badge-outline-light text-dark">',
        )
        .concat(
          a,
          '</span>\n                </div>\n                <div class="kanban-title-content">\n',
        )
    }
    for (
      var a = new jKanban({
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
                var count = $(target).parent().children().first().children().first().children().find('span')
                $(count).text((Number($(count).text())) + 1)
                var count2 = $(source).parent().children().first().children().first().children().find('span')
                $(count2).text((Number($(count2).text())) - 1)
                console.log(data)
              }
            })
          }, // callback when any board's item drop in a board
          dragBoard: function (el, source) {}, // callback when any board stop drag
          dragendBoard: function (el) {}, // callback when any board stop drag
          buttonClick: function (el, boardId) {},
        }),
        s = 0;
      s < a.options.boards.length;
      s++
    ) {}
  }),
    n.coms.docReady.push(n.Kanban)
})(NioApp, jQuery)
