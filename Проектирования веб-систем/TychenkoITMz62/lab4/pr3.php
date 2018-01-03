<?php
class A
{
  public static function test()
  {
          echo "odin";
  }
  public static function get()
  {
          echo "odin";
  }

 }
class B extends A
{
    public static function test()
  {
          echo "neodin";
  }

}
B::test();