<?php

  namespace Marvel\NewYork {
      class HankPym {
          public static function whoami() {
              return 'I&rsquo;m ' . substr(get_class(), strrpos(get_class(), '\\') + 1) . ' from ' . substr(__NAMESPACE__, strrpos(__NAMESPACE__, '\\') + 1);
          }
      }
      echo HankPym::whoami();
      class IronMan {
          public static function whoami() {
              return 'I&rsquo;m ' . substr(get_class(), strrpos(get_class(), '\\') + 1) . ' from ' . substr(__NAMESPACE__, strrpos(__NAMESPACE__, '\\') + 1);
          }
      }
      echo IronMan::whoami();
  }
  namespace Marvel\NewJersey {
      class Wasp {
          public static function whoami() {
              return 'I&rsquo;m ' . substr(get_class(), strrpos(get_class(), '\\') + 1) . ' from ' . substr(__NAMESPACE__, strrpos(__NAMESPACE__, '\\') + 1);
          }
      }
       echo Wasp::whoami();
      class WonderMan {
          public static function whoami() {
              return 'I&rsquo;m ' . substr(get_class(), strrpos(get_class(), '\\') + 1) . ' from ' . substr(__NAMESPACE__, strrpos(__NAMESPACE__, '\\') + 1);
          }
      }
       echo WonderMan::whoami();
  }
  namespace Marvel\Asgard {
      class Thor {
          public static function whoami() {
              return 'I&rsquo;m ' . substr(get_class(), strrpos(get_class(), '\\') + 1) . ' from ' . substr(__NAMESPACE__, strrpos(__NAMESPACE__, '\\') + 1);
          }
      }
       echo Thor::whoami();
  }
  namespace Marvel\England {
      class CaptainBritain {
          public static function whoami() {
              return 'I&rsquo;m ' . substr(get_class(), strrpos(get_class(), '\\') + 1) . ' from ' . substr(__NAMESPACE__, strrpos(__NAMESPACE__, '\\') + 1);
          }
      }
       echo CaptainBritain::whoami();
  }
  namespace Marvel\Usa {
      class Beast {
          public static function whoami() {
              return 'I&rsquo;m ' . substr(get_class(), strrpos(get_class(), '\\') + 1) . ' from ' . substr(__NAMESPACE__, strrpos(__NAMESPACE__, '\\') + 1);
          }
      }
       echo Beast::whoami();
  }
