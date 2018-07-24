`Маршрутизация`__
=================

.. image:: img/hru.png
   :alt: Clean URL
   :align: left

Современные cms имеют поддержку `ЧПУ`_ (семантического URL). Такой URL понятен человеку и легко запоминается.
Но в его реализации всегда есть спорные моменты и определённые сложности. Но, с библиотекой `FastRoute`_ 
определённые сложности ушли на второй план, а некоторые вовсе не ощущались. 

В MagicMCR Семантический URL реализован по методу RESTAPI 
``__ROUTE__ => Handler->{action}();``

.. toctree::
   :titlesonly:

   router/index

.. __: https://ru.wikipedia.org/wiki/Семантический_URL

.. _`ЧПУ`: https://ru.wikipedia.org/wiki/Семантический_URL
.. _`FastRoute`: https://github.com/nikic/FastRoute