<?php
// 1
if (el1 > el2) Swap(el1,el2);
if (el2 > el3) Swap(el2,el3);
if (el1 > el3) Swap(el1,el2);

// 2
if (el1 > el2) Swap(el1, el2);
if (el2 > el3) {
   Swap(el2, el3);
   if (el1 > el2) Swap(el1, el2);
}

// 3
if (e1 < e2) {
   if (e3 < e1) swap(e1, e3);
} else {
  if (e2 < e3) swap(e1, e2);
  else swap(e1,e3);
} 
if(e3 < e2) swap(e2, e3);
// This takes 3 comparisons, but only two swaps.
