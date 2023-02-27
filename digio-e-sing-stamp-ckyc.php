<?php
 // Client Id : AIE2XT432WZWGVKMAKL2GZX2R9KJLD58
 // Client Secret : O59OW2B6T2IBYXRRMGRN6MYIJDK8EN75
class clsESingDigio
{
	function ESingDigio($identifier,$FileUrl,$name,$digio_url,$DIID,$CompanyID,$BusinessUserID,$CustomerID,$CreatedByID,$ClientDate,$X_Client_Id,$X_Client_Secret)
	{	
		include("clsDBConnSUD.php");
		$db=new clsDBConnSUD();
		
		$url ='https://www.jainamsoftware.com/admin/docupload/39423106463e9c5855106a01019755163e9c58551071188579031.pdf';
		
		//$text = file_get_contents($FileUrl); production
		//$text = file_get_contents($url); //uat
		//$Filedata = base64_encode($text);
		$Filedata = "JVBERi0xLjQKJcOkw7zDtsOfCjIgMCBvYmoKPDwvTGVuZ3RoIDMgMCBSL0ZpbHRlci9GbGF0ZURlY29kZT4+CnN0cmVhbQp4nE2KsQrCQBBE+/2KqYXE3TPeeXAcGKOFXWDBQuxM0gmm8ffNnhZh4M0wM1wLPvQGL/LiEKLDPNBtg9e/ZcwTtUrBLdfAsfbQJ7YXgQh0vCeW3CR2WRLvLBU0uRKfeG/Z21T28LMDR7OjoTWcVu8uV4UPvdJZqaceX2JkI2sKZW5kc3RyZWFtCmVuZG9iagoKMyAwIG9iagoxMjYKZW5kb2JqCgo1IDAgb2JqCjw8L0xlbmd0aCA2IDAgUi9GaWx0ZXIvRmxhdGVEZWNvZGUvTGVuZ3RoMSA5ODI4Pj4Kc3RyZWFtCnic5Vh7fFN1lj/n3rxumzZJaUtooLklFAt9QQsIiDT0EVoLEmgrCQjktknbYJuEJIAwKkV0xCCCijgMzsDHcUbxxS2oFHccquPsjA9GdtWZz44zS3V0nmJdV51ZWeie+7u3pUXls5/d/W9veu89v/P8/s45v19+aTK+MQRm6AEe3G3dUqx8Qm4WALwBgFltm5Ii3/jOVKIHALid7bGO7u+euPEzAF0ngPHZjq4t7d/57mO3ApgnAqTJnSEpeCH0twqAXLKHOZ3EWHPxdiPAeB2Np3R2J2/+jb5wFo2LaDy3K9omNVsCFhoHaJzfLd0ck/hCjsY9NBYjUnfokQzvFzQ+DJC+NhZNJPfD9CEAFyjyWDwUu6fheB+NRQC+hnhIH+UyE2lQxhyv0xuMJiEt3ZwB/w8v/Rv6N+BW/XbIgS3sOebSzYds2Aww9JEyuvS8uPL/FoVJfT0LL8JRODxGtBNuo+dTY3in4KfwJKMOwu4ruD0JT2jUPjgAd32j3nrYQX4epfiXrgBxt8B3KHIfPEaNMhkrKepNmvRdePXrXeF7+CrcD4+T5v1wgp4HaWV8i/sU7udWQIT7Nb8dboe7aY6HMAx7SD8Aj+JqWEtc9VoLIYhe5jQFe+GHsJVW4cil3z7075Dxn8cJ+d3kZz+EYQNV0vKf+UOfwizdHyDj4ttwincS9mfgOWayfdjWWM+v557nuAsP0OA+6KBbwn8hnLv5RVfI5v/6MmynfSFb97rSQ0NvXdxG2N+lCr1A2XjTvXj1Kr+vpblpxXLvsuuXLmm8rqF+saeutqZ6kbtq4bULrpk/b+7Vc2bPnFFeVlpSdNXUwimuyQVOe7bNasnMSE8TTEaDXsdzCCWijIE6mS8UbR7JVeeS6ktLxDp7Z21pSZ3LE5BFSZTppZvqqq9nLJckiwFRnkovaRQ7ILtJs/0yTbeq6R7RRKu4ABYoIVyifLrWJfbhquU+onfXuvyifI7RSxmtm8oGGTQoKCALhkpBK9bJnk2dqboAYcTe9LQaV00orbQEetPSiUwnSi5yxXqxaCEygiuqm9/LgSlDCUszrZOCsne5r67WUVDgLy1pkDNdtUwENcylbKiRjcylGFagwy6xt6Q/dU+fFVoDxeagKyjd6JN5iWxTfF0qdZdsK5anuWrlaVs/sNPMQ3KJq7ZOLla8Nq4YidN4KSTK+kKrS0x9DjQd17mPxnIkjWMotH4OCilzNTKu8BUol8NDuU6lPC7RkwqkpL6hnlaXaHWles3mVKyO0g1eH7noG3phl0P23OOXrYFOnO/Xpu5Z0SiPW77aJ3OFHrFTIg79VbkK5joKbCM63m8SA6WFkkMZLihQ0rCrzw2tNJB7lvvUsQitjmPgLi/2y1xAkfQPS3JaFEnPsGTEPOCi2jY2+VKyrrAh6KqjjO+S5J5W6q71SmFcVjnzC0eBK5VlE+eV+5muSKgagmFR1k+lJJHVaAPqG8UkZWWDzC/U1zkHBZhqyxLnuciN4qfOVRfQ/jZ12smBSImuL1Ybodknu2uJcEtaxep6Z5SThRSggoVrWTHlcldMznZVj1RXgVUXbvIxE81Mzq6RIdCmWcnldWxdiXWpQK0KQfHlWu47CZVDA72zRMfxSpgF/lpFObeGumxqXcoXbJedAUeQ1l276HMUyG4/Vdjv8oX8SttRhqYNOFhz+FmvNPsam1yNy1f55mpAVIHiTldYd5kbl8+huqEGlE2FJtHHOXg/KVqJIXqIcFUvoKdsLDTRbaWEM67SuNULRB86YFibYMjTxLpQraanjMc41SvtVFM/7M2gDMlPTb2jwF+gXqUlHIlFLTBZmJSk1g+LaJsigYn6s6aesZRc2pWmF32ukMvv6hRlt9enzE1JD8uylgyWc61WzWNGo5JFaYICEg8PlGTKnmLH6OTKi9l4ZFh/mbhhWCymTK7GppTi3KU5BELeIIPSwu65NgfbC5QF7aK9V7TSkmYLOtXrdiuLuXO+4sTVEEy5mnwLmDbtJ7c6tiqxsqARG5urS0toa6vudeHO5b1u3Nm0ynfSSme5nc2+YxxyNYFqf+8UkvlOigBuxuUUrsJUBqIyUDytoIGJ6TtOugF6mFTHGGzc1ofAeKZhHkJbH6fyrGqgqSyQGziS6FSJe1hbRzyTyuthPHb1gpIyd5rebXILbjOXwTl6UWEdI84LdPYUEI6bMQMdvWS1grH7sKdXcDtUjR7ScKsId7ZcCt2yynfcDGTGnhSoWrmoXeydVGz6WqkTg0qj3OLvTAX8ymKDXCoN/aGMroVUJtdCAmIwy2muULWc7qpW+FUKv0rlGxS+kVoUc5HMe6j2XhmVDljtK6AlKea96khZzymV8tOmkrJ+WErgTtNJpILOjTwYwenO4Ax63sALJj2vI1bV6fLTtiycN89WaaucOWNcga1gnK3AdloXOn9wCX9av/3LbfrZ58fr/qwcDpDOTKAXyVc6xN3jjTyvo1Nhuo7O5UZund9rxAEjGvuG3nOXjWvYYrzbyFmMaDIaBSVWlpiB/RkoZ+DhDOzJwFgGBjLQm4HEX6NdG6CqoqpyXvnaNWuK12woHgGmgiNsNheRBXTrpAuGU6e4L09xuy8k9NsvPMU1f7lNwcjByqGPdHbd9ZAFE2Cz2zPOZjBOoF8TZqONd+QZDMBPAK8/YwJm6yZMECyWXK/fYhV4r1/IPePAfgceduBeB/Y4MObAgAO9DpzhwA3DF1QVg72KoME8e/m6tWs0iqCOHwUVs3MrK+ZcPZ4rmMzZrFmVoi3nqjJ0TTYYMfu7+zbunvB96eLjn5w//2f83QuWvXftOGDAv73w2tr60iHAfMxDM+ZfeMmeevJ7Rw+wvKfosZDOjjxsci/nqQg66tOcT/Q4oMezeuzX03c5HtJjjx5jenTq0aLHT0aJDutxrx6X6XGImZxh/BHl4eyrV3zkgqoqpQTKhJR5pZ7Vv/HlLJbjGyjHkyjHaZAL9e4SmyEdDDDebsr0+k1WPtvr53MP23GvHXvsGLNjwI5eO86w41k7rrk8kSPNh1bOpaSroCKLnzWVkpXDsqib9OXH5z7FD//+lxfv/N73d+968JFdXP7FDy7+BQvQxs24OHjxvYHX3/ztr359Boax8YOUq1yYDDe4Z06CzEzLeIPFMMWVlZNJ7cqbTCKDmafA3DsFY1PQOQWHpuDAFOyfgmomRtV5nl3Ng1ZfQlqYiRrS3PGVVxEze7yrDGerVZ/NsPOzK3649fRLeO+3Hq3guGcNT/HGC7+5+a4DqdRDO7c807kKs9HOzVnVugVfOj/uyBxrcjrGfv/K22d//YtXqd70e5v/D/pll4Y3uv+OYBDSeI4zpPHpZoGzGDDnoBnvMGPAjM1mrDWjaMZsM+rMOGDGt834ihkPm3HfWB1VoUMVq7LRgncZX/W7mvEdY/m7GL+R8dPNeDUJXh8rqPrvARnR+aoC5zVjuRmtZgQzGtcqTbluTG9e1qBr14xt3Q1fEYySQVVlVeWodarsKC6sHJc7vgrHVXKhdy5u7v84Y67rqi9O6eZfcBf9bOMm7mWqxTzqp+d1jTAdgu4FRsPknImODABHjkFXXJIxmbfbnV7/RLuVT/P6jXyutYR+3+AnJThQgv0lGCjBnhKsot8gJVpjbVDWVaXSXJVqd31l6zC4Jk+96up8VHupHMu42bPmVFKrGdkWkpOdj+Pzef75P5557d2CQ+P39ty9zde6/eCO69567fhbEx+x7IhsTc5Y+9Ce2xqKsPjAj+7c7Vy5vLnZ7c2bXLQ04t138LZd2fVLr2ssWzC9cMq110nK/nIv9dvHtGbsEHBfk2OzZZmMWcYJeeOInWXM4TNopVjP5GF/Hsp5+Al7DuXhQB6OMA/nYSzv0k7Cdg82yax5oxcPzW8hTSw3h3byWep02J6eTTvjtfN/cKv82HPTAy3bDjz7rBH57evbjv7yQjn3TDw6S37wwu36Ny7edu3taYT3YQCdhb6H0qDYna0zcVy6Wa/T8QaDCQGTfpoHLV2opPCV5ZXqHqZsYrMLbPrZhfQNkvMwdlx8GZf+CFce0C34/RMfnrcfUPLQQX7N+v2QDwvd4kTItJhyJuVYQOcUTRMzs7LSE/4sI8JEmDgcQ9n8Wais0XVUQi3UqxuB8Sp1wtmZaKS/gpyOygceOdSzbOeWxIMZfdl/e/mdDxv3/VNiZz53dtvG4/fdcsvOG5I9t26wHfnFqydXPPLIE2sf8qjfAdfTnjuBsBVBm3ue0eCYmDPZDDC50DrRYJg2vdBmtVmTfpt93O1L6YFLLTa06m30ned02hN+p5EXEtSfE7TeUyGr32DFbBrf0Ia5BawLi3H2yNY2MiODMScfdRP+/odfDdlfmIKWnQd7H2tv3feDO3dsfsD8HE3t7b8+tPf7Mt7501+99KLty2/fkdj+8Pb4hh1bo5lPv/wz+a4j+TrbMbZnn6QJblPPKPiBe4g3GjmdTjCJiBbETB71bp3+4dU6jr9fwDsEjAvYKmCzgLUCVgg4WcBsAXUCfirg+wK+LeArAh4T8FEB9w3rB4f1Zwk4ZVi/4zMBTwp4RMADAt4t4BYBGwS8VsBSAZ0CWgQcEnBQwHcFfF3AfxDwSQG/J+BuAW8VMCrgOgEbBbxGwGIBHQKmC3hBwHMC/k7A08P6BwXcxfRvEnC1gEuZ/2kCTmD6V58X8K9jDQ4I7tUamDAzUUMQpEkCKsoqmlMCHhXwkIDfYq5HQBBo7k0mJtkeAbcJGKDz6vCEjJe2xnWjN9V18bHX6B30Kzvw2F34SrpQVV4MeXbrL6nR1mgLkbWXi6/kZ1fmYMc++yv/+DLu5j/7cturrwL73y8HcJffG11nWfA551T/7/jGA5MWX/ov1dBHdKJV/j9tGmGRnXHhxeuhZjRnzJVpADit/zk8rkvASvw5pOh9AzePVjy9dWRO9zyi76X7Ybo76L6e5NSbMBVuhvdxOt5Mn99wh/ksfj2/n/9At0Lv0yJlQrGCm6G3QjncSMSjnI5+gyjSfIyM4Fk5gg3BQiPUrIzQrtE85EG3RutI5y6N1lOU/RptIPpRjTbCVjim0SbIxhKNFiAT3RqdhmG8XqPTYSJ3YuS/7GXcWxqdAbP54f++Z0IeP4eQ0DKh0TO8V6MR8vmLGs1Bpm6iRvMwSzddo3WQr1ur0XqYqLtFow1Ef0ejjfCZ7lmNNkGR/nGNFmCi/oxGp3H/rP9Io9NhruknGm2GG01faHQGrBdWaHQmzBJ+XBvuCCfDW0NBMSglJbEtGtsSD3d0JsWitmlixYyZM8TF0WhHV0isicZj0biUDEcjZWJazeV6FeIK8lEvJUvEhkhb2ZJwa0hVFpukSGJFqGNjlxRflGgLRYKhuFgqXqZw2fCGUDyh0BVlM2aUzbwkvEw1nBAlMRmXgqFuKX6TGG0fC0KMhzrCiWQoTsxwRGwpayoTvVIyFEmKUiQoNo8YLmtvD7eFGLMtFE9KpBxNdhLO9Rvj4UQw3KZES5SNwB+Vi6ZkaFNIXColk6FENFItJSgWIVsUD3dHS8TNneG2TnGzlBCDoUS4I0LC1i3iWBuRpBLNJRKJbiKXm0IlhLs9Hkp0hiMdYoJmLCZC8XC75kJMdkpJZebdoWQ83CZ1dW2hqnXHyLSVyrQ5nOxUoktdT5SpKCgt7ZROMdwdi0c3MXilibZ4KBShOFJQag13hZPko1OKS22ULMpYuC3BkkE5EGNSpLRuYzwaCxHIlYuXXFIkWGoiE9GuTaEE046EQsGEUoggTbGLjChwVzR6kzKV9mic4AWTnaWj8LZHI0kyjYpSMEhzpkRF2zZ2KyWiDCeHwUlt8SjJYl1Skrx0J8o6k8nY/PLyzZs3l0laVdqoKGXkufxKsuSWWEgrRVzx0t21hCofUaq2kZVWmURTwxJxWYzy4yFwoqZQIg435cyymVoISmM4lkyUJcJdZdF4R/kyzxKohTCdi8KQpHsrhCAIIt0SjSWi2iAKMdgCcabVSVxROaHANHpXwAyYSbcIi0krSvIushdpj46Sfow9JeY3ChEoI0kak13ZXwVRKzQc9cy+hKgG8tBGPpaQXStJR3sWoYlGEUgwuw7YSDgk0lhEnDbiRMiXYiFCKd1X9nBl6Q1MkhjhVxCiGfQpI9xfZ3llr2GSiCzLSSZRUHYz5DcRL0rfF1fKhEh6IVa5BElCbBRkXhXfLaTRxLS8zFLJQpJFizCt5q+JuIwitpN9G6visGYb8610g+o5SnSnls/1lOs4QxBkdsNzS1Dkr2b/6/uiiaHbxGIuZXxlnGCyahontHmpOVvE4nXTSMnFZkKixO1ktMTyGWTWSndFNMtW6jfxinFEzVbS6hKhT5R0VZSKTYmW73b2TLC4EYohEq3WWGRIFXTtl6EQWcYkln+15t0kTTLdNuJ30WeLtta6KT9q1FZtNW1ma7NzZO6kXzCZVfZSLtRuade6U2TcGNFRhn04e6WsIgr+EEOlUBJb661k0cXiqDg6WU9IrKIhrcJJhnY4S0FtVgrCGOOUQh3rBmV9h7RMrqSdYcnXelSzNbojlUp0MbyJUb4jDG2Q8aIjmVW0urRI6oy72A5000hV2lmXqdkLMm+l35DfdpabpBY1yhAF6aPWWe2oKNluZFVTV5Haw8mvZE5i+Y1qdjG2DyU1LN1sVXSyvovBfDpDlhM65VPGum/0WmnTVkqZhrn8f2yn4IqxDI5eFfERLN2EcYm25iMja23jqFU7XIkm2nmWsF0ipvWPR8uceJkHZa1cvlPOZHvk2Fmo3RimcZLhSbBclrE5dJB8GUVYws7L6q+Cq+h0/DXXogIQsAoQ50ELLtTe1XQyzgYnLqK3k97XQCXOJ/5cepMc3Giks66TPQ+hzv0E9l/AoxcQLmDasvMonsfPvUXOTz1Fzn/zTHd+4il2rhvcNshZBpcNrhvcM3h0UJ/+4Qf5zt+/73Fa3kf3+55c53sDHuebA2cHBgd490DlHM+Ax+78+NyQ8xz+qeWj+r+2/KUCWv78pz+1/LEeWv4AQ87fXXu25SzyLf96Ld/yW37IaXnH+Q7HHu7X7A7Pmy/ji/0LnC95pzp//JMi59BJ9PbF+nr6+L6hfvdQX1aFx3mi6sSyE9ET204cOnH0hNH+PMaOHT4mH+Mtx3Dvcyg/h5bn0GQ5XnV88DjfI++VOVnul8/IfPnRqqPc4aflp7n+p888zZU/VfUUd+hJ7H/izBPcsiN7jnDlR6JHTh0ZOqJ7+OAUp/cgRvfjqf243zPJ+eC+8U7LPue+bfv27Bvap59xn/s+ruc+jO3p2cPt3YP9e87s4Zbds+6e6D38tz1DzkN34h07ZjqTiSpngiYSjSxwRjyznXlob5lQaW8xVvItBpp6gGTr6L7RM9O5elW9cxW9x1VktegpPboKvqWLRzO/gF/Cd/G38PrB5UPu4HLOvXz2XI97eWGR500vNnhEZz15Xkz3UQ+e9Qx6uB4P5lbktNjQ0mKtsLRwSPUHdDotVZZ1lm0WncVSbllmiVr2WM5ahizGKuINWvgo4DLAnlzUYx/u7W1uKi5u7DMOrWiUjd7VMu6UC5uUp3v5KtmwU4aWVat9vYj3+u/cvRuqJzXKFU0+OTDJ3ygHiXArRA8R1km9uVDtTyQTyY3FyoUqAcni4kRCoVAZFasyRmFxgsSkRkY0SG6ERHEiiYkErZYk8RO4lugE7TXETyCZ0J0o1vyPeKIAa8kRPZJqiESC7BLkJ6GFs6+F/wJ72N4MCmVuZHN0cmVhbQplbmRvYmoKCjYgMCBvYmoKNTgwMQplbmRvYmoKCjcgMCBvYmoKPDwvVHlwZS9Gb250RGVzY3JpcHRvci9Gb250TmFtZS9CQUFBQUErTGliZXJhdGlvblNhbnMKL0ZsYWdzIDQKL0ZvbnRCQm94Wy01NDMgLTMwMyAxMzAwIDk3OV0vSXRhbGljQW5nbGUgMAovQXNjZW50IDkwNQovRGVzY2VudCAtMjExCi9DYXBIZWlnaHQgOTc5Ci9TdGVtViA4MAovRm9udEZpbGUyIDUgMCBSCj4+CmVuZG9iagoKOCAwIG9iago8PC9MZW5ndGggMjgzL0ZpbHRlci9GbGF0ZURlY29kZT4+CnN0cmVhbQp4nF2Ry26EMAxF9/mKLKeLEc95VEJIU0ZILPpQ6XwAJIZGKiEKYcHfN3amrdRFomN8r2Vuoqq5Nlq56M3OogXHB6WlhWVerQDew6g0S1IulXD3im4xdYZF3ttui4Op0cNcFCx6973F2Y3vLnLu4YFFr1aCVXrku1vV+rpdjfmCCbTjMStLLmHwc54789JNEJFr30jfVm7be8uf4GMzwFOqk7CKmCUsphNgOz0CK+K45EVdlwy0/NdLsmDpB/HZWS9NvDSO83PpOSU+HpCzwBVyHrhGPhCnMfIxfM+RT8SnI/I5cIb8GDQ0/0KcJchPgVPkKjDpr2F+Qsvft8TfwJx/4uFitdZHQ49BmWAaSgP/fTAzG7TR+QZdKImzCmVuZHN0cmVhbQplbmRvYmoKCjkgMCBvYmoKPDwvVHlwZS9Gb250L1N1YnR5cGUvVHJ1ZVR5cGUvQmFzZUZvbnQvQkFBQUFBK0xpYmVyYXRpb25TYW5zCi9GaXJzdENoYXIgMAovTGFzdENoYXIgMTMKL1dpZHRoc1s3NTAgNzIyIDU1NiAyMjIgNTU2IDI3NyA1NTYgNTAwIDUwMCA1NTYgNTU2IDU1NiA1NTYgMjc3IF0KL0ZvbnREZXNjcmlwdG9yIDcgMCBSCi9Ub1VuaWNvZGUgOCAwIFIKPj4KZW5kb2JqCgoxMCAwIG9iago8PC9GMSA5IDAgUgo+PgplbmRvYmoKCjExIDAgb2JqCjw8L0ZvbnQgMTAgMCBSCi9Qcm9jU2V0Wy9QREYvVGV4dF0KPj4KZW5kb2JqCgoxIDAgb2JqCjw8L1R5cGUvUGFnZS9QYXJlbnQgNCAwIFIvUmVzb3VyY2VzIDExIDAgUi9NZWRpYUJveFswIDAgNjExLjk3MTY1MzU0MzMwNyA3OTEuOTcxNjUzNTQzMzA3XS9Hcm91cDw8L1MvVHJhbnNwYXJlbmN5L0NTL0RldmljZVJHQi9JIHRydWU+Pi9Db250ZW50cyAyIDAgUj4+CmVuZG9iagoKNCAwIG9iago8PC9UeXBlL1BhZ2VzCi9SZXNvdXJjZXMgMTEgMCBSCi9NZWRpYUJveFsgMCAwIDYxMSA3OTEgXQovS2lkc1sgMSAwIFIgXQovQ291bnQgMT4+CmVuZG9iagoKMTIgMCBvYmoKPDwvVHlwZS9DYXRhbG9nL1BhZ2VzIDQgMCBSCi9PcGVuQWN0aW9uWzEgMCBSIC9YWVogbnVsbCBudWxsIDBdCi9MYW5nKGVuKQo+PgplbmRvYmoKCjEzIDAgb2JqCjw8L0NyZWF0b3I8RkVGRjAwNTcwMDcyMDA2OTAwNzQwMDY1MDA3Mj4KL1Byb2R1Y2VyPEZFRkYwMDRDMDA2OTAwNjIwMDcyMDA2NTAwNEYwMDY2MDA2NjAwNjkwMDYzMDA2NTAwMjAwMDM1MDAyRTAwMzQ+Ci9DcmVhdGlvbkRhdGUoRDoyMDE5MDcwOTEzNTAyMiswNSczMCcpPj4KZW5kb2JqCgp4cmVmCjAgMTQKMDAwMDAwMDAwMCA2NTUzNSBmIAowMDAwMDA2OTg2IDAwMDAwIG4gCjAwMDAwMDAwMTkgMDAwMDAgbiAKMDAwMDAwMDIxNiAwMDAwMCBuIAowMDAwMDA3MTU1IDAwMDAwIG4gCjAwMDAwMDAyMzYgMDAwMDAgbiAKMDAwMDAwNjEyMSAwMDAwMCBuIAowMDAwMDA2MTQyIDAwMDAwIG4gCjAwMDAwMDYzMzYgMDAwMDAgbiAKMDAwMDAwNjY4OCAwMDAwMCBuIAowMDAwMDA2ODk5IDAwMDAwIG4gCjAwMDAwMDY5MzEgMDAwMDAgbiAKMDAwMDAwNzI1NCAwMDAwMCBuIAowMDAwMDA3MzQ4IDAwMDAwIG4gCnRyYWlsZXIKPDwvU2l6ZSAxNC9Sb290IDEyIDAgUgovSW5mbyAxMyAwIFIKL0lEIFsgPEZBQ0JEOTcwOTU2MjA0NUMxNENEMjcyMkM4MUQ3OEQ5Pgo8RkFDQkQ5NzA5NTYyMDQ1QzE0Q0QyNzIyQzgxRDc4RDk+IF0KL0RvY0NoZWNrc3VtIC9BNUEyRjYxRUM0OEQ3QUM3MURBNjJFMDBGRTRCMzE2Mwo+PgpzdGFydHhyZWYKNzUyMwolJUVPRgo=";
		$responsetype="E-Sing";
		$postFields="{
						\"signers\": [
							{
								\"identifier\": \"$identifier\",
								\"reason\": \"$name\"
							}
						],
						\"expire_in_days\": 10,
						\"display_on_page\": \"all\",
						\"file_name\": \"Doc.pdf\",

						\"file_data\": \"$Filedata\",
						
						\"send_sign_link\": \"true\",
						\"notify_signers\": \"true\"
					}";
		
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL =>  $digio_url."/v2/client/document/uploadpdf",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => $postFields,
		  CURLOPT_HTTPHEADER => array(
'Content-Type: application/json',
    'Authorization: Basic QUlFMlhUNDMyV1pXR1ZLTUFLTDJHWlgyUjlLSkxENTg6TzU5T1cyQjZUMklCWVhSUk1HUk42TVlJSkRLOEVONzU='
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);;
		echo $response;
		//return $response;
		$this->TryResponse($db,$response,$err,$responsetype,$curl,$DIID,$CompanyID,$BusinessUserID,$CustomerID,$CreatedByID,$ClientDate);
	
		//echo $response
			// {
		// "id": "DID230214153541759EBXGSNTGS35VM3",
		// "is_agreement": true,
		// "agreement_type": "outbound",
		// "agreement_status": "requested",
		// "file_name": "Template.pdf",
		// "created_at": "2023-02-14 15:35:41",
		// "self_signed": false,
		// "self_sign_type": "aadhaar",
		// "no_of_pages": 1,
		// "signing_parties": [
			// {
				// "name": "9763305862",
				// "status": "requested",
				// "type": "self",
				// "signature_type": "aadhaar",
				// "identifier": "9763305862",
				// "reason": "Test",
				// "expire_on": "2023-02-24 23:59:59"
			// }
		// ],
		// "sign_request_details": {
			// "name": "Jainam Software",
			// "requested_on": "2023-02-14 15:35:42",
			// "expire_on": "2023-02-24 23:59:59",
			// "identifier": "rupesh.ambade@annualproject.com",
			// "requester_type": "org"
		// },
		// "channel": "api",
		// "other_doc_details": {},
		// "attached_estamp_details": {}
	// }

	}	
	
	function EStampDigio($identifier,$FileUrl,$name,$digio_url,$DIID,$CompanyID,$BusinessUserID,$CustomerID,$CreatedByID,$ClientDate)
	{		
		include("clsDBConnSUD.php");
		$db=new clsDBConnSUD();
		
		$url ='https://www.jainamsoftware.com/admin/docupload/39423106463e9c5855106a01019755163e9c58551071188579031.pdf';
		
		//$text = file_get_contents($FileUrl); production
		$text = file_get_contents($url); //uat
		$Filedata = base64_encode($text);
		
		$responsetype="E-Stamp";
		$postFields="{
						\"signers\": [
							 {
								\"identifier\": \"$identifier\",
								\"name\": \"$name\",
								\"sign_type\":\"Aadhaar\",
								\"reason\": \"$reason\"
							}
						],
						\"expire_in_days\": 10,
						\"display_on_page\": \"All\",
						\"notify_signers\": true,
						\"generate_access_token\" : true,
						\"send_sign_link\": true,
						\"file_name\": \"Dummy.pdf\",
						\"file_data\": \"$Filedata\",
						
						\"estamp_request\": {
						\"tags\": {
						  \"RJ-100-ssk\": 1
						},
						\"sign_on_page\": \"ALL\",
						\"note_content\": \"not content\",
						\"note_on_page\": \"ALL\"
					  }

					}";
					
					
		$curl = curl_init();
		
		curl_setopt_array($curl, array(
		  CURLOPT_URL => $digio_url."/v2/client/document/uploadpdf",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => $postFields,
		  CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json",
			"Authorization:  Basic Base64encodedValueOf(".$X_Client_Id.":".$X_Client_Secret.")"
		  ),
		));
		
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		//return $response;
		$this->TryResponse($db,$response,$err,$responsetype,$curl,$DIID,$CompanyID,$BusinessUserID,$CustomerID,$CreatedByID,$ClientDate);

	//echo $response;

	// {
		// "id": "DID2302141550225382FQX155YE5HD9H",
		// "is_agreement": true,
		// "agreement_type": "outbound",
		// "agreement_status": "requested",
		// "file_name": "Dummy.pdf",
		// "created_at": "2023-02-14 15:50:23",
		// "self_signed": false,
		// "self_sign_type": "aadhaar",
		// "no_of_pages": 7,
		// "signing_parties": [
			// {
				// "name": "RU-mail",
				// "status": "requested",
				// "type": "self",
				// "signature_type": "aadhaar",
				// "identifier": "9763305862",
				// "reason": "Test",
				// "expire_on": "2023-02-24 23:59:59"
			// }
		// ],
		// "sign_request_details": {
			// "name": "Jainam Software",
			// "requested_on": "2023-02-14 15:50:24",
			// "expire_on": "2023-02-24 23:59:59",
			// "identifier": "rupesh.ambade@annualproject.com",
			// "requester_type": "org"
		// },
		// "channel": "api",
		// "other_doc_details": {},
		// "access_token": {
			// "created_at": "2023-02-14 15:50:24",
			// "id": "GWT230214155024249E24Y7HNOS115YD",
			// "entity_id": "DID2302141550225382FQX155YE5HD9H",
			// "valid_till": "2023-02-14 16:50:24"
		// },
		// "attached_estamp_details": {
			// "RJ-100-JainamSoftware": [
				// "STAMP2302141534199719JRYTHR38XKQ"
			// ]
		// }
	// }
		
	}

	
	
	
	
	function TryResponse($db,$response,$err,$responsetype,$curl,$DIID,$CompanyID,$BusinessUserID,$CustomerID,$CreatedByID,$ClientDate){
		
		//$response = curl_exec($curl);

		$query="INSERT INTO LogInfo (CompanyID, BusinessUserID, CreatedDate, Description) values ($CompanyID, $BusinessUserID, ADDTIME(UTC_TIMESTAMP(),'0 05:30:00'), 'Cron Job ".$responsetype." Charge Verify - Response: ".$response."')";
		$db->fnExecuteInsert($query);	

		//$err = curl_error($curl);
		//curl_close($curl);

		if ($err) {
			$query="INSERT INTO LogInfo (CompanyID, BusinessUserID, CreatedDate, Description) values ($CompanyID, $BusinessUserID, ADDTIME(UTC_TIMESTAMP(),'0 05:30:00'), 'Cron Job Auto Debit Charge Verify - Error: ".$err."')";
			$db->fnExecuteInsert($query);
			echo $query;
			//continue;
		} 

		$Array = json_decode($response, true);
		$message=$Array["agreement_status"];
		try {
			$agreement_status=$Array["agreement_status"];	
				if($agreement_status=="requested"){
					$IsVerified=0;
				//Remove common message
					$message="";
					$id=$Array["id"];
					
				$query="
					UPDATE 					
						DocumentInfo 
					SET 
						IsVerified=".$IsVerified.", 
						VerificationRemark='".$message."', 
						OnGridIndvidualID=NULL,
						OnGridDocumentID='".$id."', 
						OnGridVerificationRequestID=NULL, 
						ModifiedByID=".$CreatedByID.", 
						ModifiedDate='".$ClientDate."' 
					WHERE 
						CompanyID=".$CompanyID." 
						AND BusinessUserID=".$BusinessUserID."  
						AND CustomerID=".$CustomerID." 
						AND ID=".$DIID." 
					LIMIT 1
					";		
					//if($unit_testing==1) { echo $query; }
					$db->fnExecuteUpdate($query);
					
				}				
			}
			catch(Exception $e) {
				$message=$e->getMessage();
				$query="INSERT INTO LogInfo (CompanyID, BusinessUserID, CreatedDate, Description) values ($CompanyID, $BusinessUserID, ADDTIME(UTC_TIMESTAMP(),'0 05:30:00'), 'Cron Job Auto Debit Charge Verify - Response Exception: ".$message."')";
				$db->fnExecuteInsert($query);
			}
		}
		
}

?>
