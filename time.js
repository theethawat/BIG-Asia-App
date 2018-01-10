function timeget(country)
{
    var time = new Date();
    var utchour= time.getUTCHours();
    var utcmin =time.getUTCMinutes();
    //Value Recieve
    
    if(country == "AFG")
    {
        yourhour=utchour+4;
        yourmin=utcmin+30;
        if (yourmin>=60)
            {
            yourmin=yourmin-60;
            yourhour=yourhour+1;
            }
        if (yourhour>=24)
        {
            yourhour=24-yourhour;
        }
        if(yourmin<10)
            {
           yourmin="0"+yourmin;
            }
        document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
        return;
    }
    

    //Nationchange
    if(country == "BHR")
    {
        yourhour=utchour+3;
        yourmin=utcmin+0;
        if (yourmin>=60)
            {
            yourmin=yourmin-60;
            yourhour=yourhour+1;
            }
            if (yourhour>=24)
            {
                yourhour=24-yourhour;
            }
        if(yourmin<10)
            {
           yourmin="0"+yourmin;
            }
        document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
        return;
    }
   

    //Nationchange
    if(country == "BAN")
    {
        yourhour=utchour+6;
        yourmin=utcmin+0;
        if (yourmin>=60)
            {
            yourmin=yourmin-60;
            yourhour=yourhour+1;
            }
            if (yourhour>=24)
            {
                yourhour=24-yourhour;
            }
        if(yourmin<10)
            {
           yourmin="0"+yourmin;
            }
        document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
        return;
    }
   

    //Nationchange
    if(country == "BHU")
    {
        yourhour=utchour+6;
        yourmin=utcmin+0;
        if (yourmin>=60)
            {
            yourmin=yourmin-60;
            yourhour=yourhour+1;
            }
            if (yourhour>=24)
            {
                yourhour=24-yourhour;
            }
        if(yourmin<10)
            {
           yourmin="0"+yourmin;
            }
        document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
        return;
    }

    //Nationchange
    if(country == "BRU")
    {
        yourhour=utchour+8;
        yourmin=utcmin+0;
        if (yourmin>=60)
            {
            yourmin=yourmin-60;
            yourhour=yourhour+1;
            }
            if (yourhour>=24)
            {
                yourhour=24-yourhour;
            }
        if(yourmin<10)
            {
           yourmin="0"+yourmin;
            }
        document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
        return;
    }

     //Nationchange
     if(country == "CAM")
     {
         yourhour=utchour+7;
         yourmin=utcmin+0;
         if (yourmin>=60)
             {
             yourmin=yourmin-60;
             yourhour=yourhour+1;
             }
             if (yourhour>=24)
             {
                 yourhour=24-yourhour;
             }
         if(yourmin<10)
             {
            yourmin="0"+yourmin;
             }
         document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
         return;
     }

     //Nationchange
     if(country == "CHN")
     {
         yourhour=utchour+8;
         yourmin=utcmin+0;
         if (yourmin>=60)
             {
             yourmin=yourmin-60;
             yourhour=yourhour+1;
             }
             if (yourhour>=24)
             {
                 yourhour=24-yourhour;
             }
         if(yourmin<10)
             {
            yourmin="0"+yourmin;
             }
         document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
         return;
     }

      //Nationchange
      if(country == "IND")
      {
          yourhour=utchour+5;
          yourmin=utcmin+30;
          if (yourmin>=60)
              {
              yourmin=yourmin-60;
              yourhour=yourhour+1;
              }
              if (yourhour>=24)
              {
                  yourhour=24-yourhour;
              }
          if(yourmin<10)
              {
             yourmin="0"+yourmin;
              }
          document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
          return;
      }

      //Nationchange
      if(country == "IDN")
      {
          yourhour=utchour+7;
          yourmin=utcmin+0;
          if (yourmin>=60)
              {
              yourmin=yourmin-60;
              yourhour=yourhour+1;
              }
              if (yourhour>=24)
              {
                  yourhour=24-yourhour;
              }
          if(yourmin<10)
              {
             yourmin="0"+yourmin;
              }
          document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
          return;
      }

       //Nationchange
       if(country == "IRN")
       {
           yourhour=utchour+3;
           yourmin=utcmin+30;
           if (yourmin>=60)
               {
               yourmin=yourmin-60;
               yourhour=yourhour+1;
               }
               if (yourhour>=24)
               {
                   yourhour=24-yourhour;
               }
           if(yourmin<10)
               {
              yourmin="0"+yourmin;
               }
           document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
           return;
       }

       //Nationchange
       if(country == "IRQ")
       {
           yourhour=utchour+3;
           yourmin=utcmin+0;
           if (yourmin>=60)
               {
               yourmin=yourmin-60;
               yourhour=yourhour+1;
               }
               if (yourhour>=24)
               {
                   yourhour=24-yourhour;
               }
           if(yourmin<10)
               {
              yourmin="0"+yourmin;
               }
           document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
           return;
       }

       //Nationchange
       if(country == "ISR")
       {
           yourhour=utchour+2;
           yourmin=utcmin+0;
           if (yourmin>=60)
               {
               yourmin=yourmin-60;
               yourhour=yourhour+1;
               }
               if (yourhour>=24)
               {
                   yourhour=24-yourhour;
               }
           if(yourmin<10)
               {
              yourmin="0"+yourmin;
               }
           document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
           return;
       }

       //Nationchange
       if(country == "JPN")
       {
           yourhour=utchour+9;
           yourmin=utcmin+0;
           if (yourmin>=60)
               {
               yourmin=yourmin-60;
               yourhour=yourhour+1;
               }
               if (yourhour>=24)
               {
                   yourhour=24-yourhour;
               }
           if(yourmin<10)
               {
              yourmin="0"+yourmin;
               }
           document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
           return;
       }

          //Nationchange
          if(country == "JOR")
          {
              yourhour=utchour+2;
              yourmin=utcmin+0;
              if (yourmin>=60)
                  {
                  yourmin=yourmin-60;
                  yourhour=yourhour+1;
                  }
                  if (yourhour>=24)
                  {
                      yourhour=24-yourhour;
                  }
              if(yourmin<10)
                  {
                 yourmin="0"+yourmin;
                  }
              document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
              return;
          }

          //Nationchange
          if(country == "KAZ")
          {
              yourhour=utchour+6;
              yourmin=utcmin+0;
              if (yourmin>=60)
                  {
                  yourmin=yourmin-60;
                  yourhour=yourhour+1;
                  }
                  if (yourhour>=24)
                  {
                      yourhour=24-yourhour;
                  }
              if(yourmin<10)
                  {
                 yourmin="0"+yourmin;
                  }
              document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
              return;
          }

              //Nationchange
              if(country == "KUW")
              {
                  yourhour=utchour+3;
                  yourmin=utcmin+0;
                  if (yourmin>=60)
                      {
                      yourmin=yourmin-60;
                      yourhour=yourhour+1;
                      }
                      if (yourhour>=24)
                      {
                          yourhour=24-yourhour;
                      }
                  if(yourmin<10)
                      {
                     yourmin="0"+yourmin;
                      }
                  document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                  return;
              }

              //Nationchange
              if(country == "KGZ")
              {
                  yourhour=utchour+6;
                  yourmin=utcmin+0;
                  if (yourmin>=60)
                      {
                      yourmin=yourmin-60;
                      yourhour=yourhour+1;
                      }
                      if (yourhour>=24)
                      {
                          yourhour=24-yourhour;
                      }
                  if(yourmin<10)
                      {
                     yourmin="0"+yourmin;
                      }
                  document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                  return;
              }

              //Nationchange
              if(country == "LAO")
              {
                  yourhour=utchour+7;
                  yourmin=utcmin+0;
                  if (yourmin>=60)
                      {
                      yourmin=yourmin-60;
                      yourhour=yourhour+1;
                      }
                      if (yourhour>=24)
                      {
                          yourhour=24-yourhour;
                      }
                  if(yourmin<10)
                      {
                     yourmin="0"+yourmin;
                      }
                  document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                  return;
              }

               //Nationchange
               if(country == "LIB")
               {
                   yourhour=utchour+2;
                   yourmin=utcmin+0;
                   if (yourmin>=60)
                       {
                       yourmin=yourmin-60;
                       yourhour=yourhour+1;
                       }
                       if (yourhour>=24)
                       {
                           yourhour=24-yourhour;
                       }
                   if(yourmin<10)
                       {
                      yourmin="0"+yourmin;
                       }
                   document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                   return;
               }
 
                  //Nationchange
                  if(country == "MAS")
                  {
                      yourhour=utchour+8;
                      yourmin=utcmin+0;
                      if (yourmin>=60)
                          {
                          yourmin=yourmin-60;
                          yourhour=yourhour+1;
                          }
                          if (yourhour>=24)
                          {
                              yourhour=24-yourhour;
                          }
                      if(yourmin<10)
                          {
                         yourmin="0"+yourmin;
                          }
                      document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                      return;
                  }

                    //Nationchange
                    if(country == "MDV")
                    {
                        yourhour=utchour+5;
                        yourmin=utcmin+0;
                        if (yourmin>=60)
                            {
                            yourmin=yourmin-60;
                            yourhour=yourhour+1;
                            }
                            if (yourhour>=24)
                            {
                                yourhour=24-yourhour;
                            }
                        if(yourmin<10)
                            {
                           yourmin="0"+yourmin;
                            }
                        document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                        return;
                    }

                     //Nationchange
                     if(country == "MNG")
                     {
                         yourhour=utchour+8;
                         yourmin=utcmin+0;
                         if (yourmin>=60)
                             {
                             yourmin=yourmin-60;
                             yourhour=yourhour+1;
                             }
                             if (yourhour>=24)
                             {
                                 yourhour=24-yourhour;
                             }
                         if(yourmin<10)
                             {
                            yourmin="0"+yourmin;
                             }
                         document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                         return;
                     }

                      //Nationchange
                      if(country == "MYA")
                      {
                          yourhour=utchour+6;
                          yourmin=utcmin+30;
                          if (yourmin>=60)
                              {
                              yourmin=yourmin-60;
                              yourhour=yourhour+1;
                              }
                              if (yourhour>=24)
                              {
                                  yourhour=24-yourhour;
                              }
                          if(yourmin<10)
                              {
                             yourmin="0"+yourmin;
                              }
                          document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                          return;
                      }

                      //Nationchange
                      if(country == "NPE")
                      {
                          yourhour=utchour+5;
                          yourmin=utcmin+45;
                          if (yourmin>=60)
                              {
                              yourmin=yourmin-60;
                              yourhour=yourhour+1;
                              }
                              if (yourhour>=24)
                              {
                                  yourhour=24-yourhour;
                              }
                          if(yourmin<10)
                              {
                             yourmin="0"+yourmin;
                              }
                          document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                          return;
                      }

                       //Nationchange
                       if(country == "PRK")
                       {
                           yourhour=utchour+8;
                           yourmin=utcmin+30;
                           if (yourmin>=60)
                               {
                               yourmin=yourmin-60;
                               yourhour=yourhour+1;
                               }
                               if (yourhour>=24)
                               {
                                   yourhour=24-yourhour;
                               }
                           if(yourmin<10)
                               {
                              yourmin="0"+yourmin;
                               }
                           document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                           return;
                       }

                        //Nationchange
                        if(country == "OMA")
                        {
                            yourhour=utchour+4;
                            yourmin=utcmin+0;
                            if (yourmin>=60)
                                {
                                yourmin=yourmin-60;
                                yourhour=yourhour+1;
                                }
                                if (yourhour>=24)
                                {
                                    yourhour=24-yourhour;
                                }
                            if(yourmin<10)
                                {
                               yourmin="0"+yourmin;
                                }
                            document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                            return;
                        }

                          //Nationchange
                          if(country == "PAK")
                          {
                              yourhour=utchour+5;
                              yourmin=utcmin+0;
                              if (yourmin>=60)
                                  {
                                  yourmin=yourmin-60;
                                  yourhour=yourhour+1;
                                  }
                                  if (yourhour>=24)
                                  {
                                      yourhour=24-yourhour;
                                  }
                              if(yourmin<10)
                                  {
                                 yourmin="0"+yourmin;
                                  }
                              document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                              return;
                          }

                          //Nationchange
                          if(country == "PLE")
                          {
                              yourhour=utchour+2;
                              yourmin=utcmin+0;
                              if (yourmin>=60)
                                  {
                                  yourmin=yourmin-60;
                                  yourhour=yourhour+1;
                                  }
                                  if (yourhour>=24)
                                  {
                                      yourhour=24-yourhour;
                                  }
                              if(yourmin<10)
                                  {
                                 yourmin="0"+yourmin;
                                  }
                              document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                              return;
                          }

                          //Nationchange
                          if(country == "PHI")
                          {
                              yourhour=utchour+8;
                              yourmin=utcmin+0;
                              if (yourmin>=60)
                                  {
                                  yourmin=yourmin-60;
                                  yourhour=yourhour+1;
                                  }
                                  if (yourhour>=24)
                                  {
                                      yourhour=24-yourhour;
                                  }
                              if(yourmin<10)
                                  {
                                 yourmin="0"+yourmin;
                                  }
                              document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                              return;
                          }
      
                           //Nationchange
                           if(country == "QAT")
                           {
                               yourhour=utchour+3;
                               yourmin=utcmin+0;
                               if (yourmin>=60)
                                   {
                                   yourmin=yourmin-60;
                                   yourhour=yourhour+1;
                                   }
                                   if (yourhour>=24)
                                   {
                                       yourhour=24-yourhour;
                                   }
                               if(yourmin<10)
                                   {
                                  yourmin="0"+yourmin;
                                   }
                               document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                               return;
                           }

                              //Nationchange
                              if(country == "KSA")
                              {
                                  yourhour=utchour+3;
                                  yourmin=utcmin+0;
                                  if (yourmin>=60)
                                      {
                                      yourmin=yourmin-60;
                                      yourhour=yourhour+1;
                                      }
                                      if (yourhour>=24)
                                      {
                                          yourhour=24-yourhour;
                                      }
                                  if(yourmin<10)
                                      {
                                     yourmin="0"+yourmin;
                                      }
                                  document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                                  return;
                              }
       
                               //Nationchange
                               if(country == "SIN")
                               {
                                   yourhour=utchour+8;
                                   yourmin=utcmin+0;
                                   if (yourmin>=60)
                                       {
                                       yourmin=yourmin-60;
                                       yourhour=yourhour+1;
                                       }
                                       if (yourhour>=24)
                                       {
                                           yourhour=24-yourhour;
                                       }
                                   if(yourmin<10)
                                       {
                                      yourmin="0"+yourmin;
                                       }
                                   document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                                   return;
                               }

                               //Nationchange
                               if(country == "KOR")
                               {
                                   yourhour=utchour+9;
                                   yourmin=utcmin+0;
                                   if (yourmin>=60)
                                       {
                                       yourmin=yourmin-60;
                                       yourhour=yourhour+1;
                                       }
                                       if (yourhour>=24)
                                       {
                                           yourhour=24-yourhour;
                                       }
                                   if(yourmin<10)
                                       {
                                      yourmin="0"+yourmin;
                                       }
                                   document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                                   return;
                               }

                                 //Nationchange
                                 if(country == "SRI")
                                 {
                                     yourhour=utchour+5;
                                     yourmin=utcmin+30;
                                     if (yourmin>=60)
                                         {
                                         yourmin=yourmin-60;
                                         yourhour=yourhour+1;
                                         }
                                         if (yourhour>=24)
                                         {
                                             yourhour=24-yourhour;
                                         }
                                     if(yourmin<10)
                                         {
                                        yourmin="0"+yourmin;
                                         }
                                     document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                                     return;
                                 }

                                  //Nationchange
                                  if(country == "SYR")
                                  {
                                      yourhour=utchour+2;
                                      yourmin=utcmin+0;
                                      if (yourmin>=60)
                                          {
                                          yourmin=yourmin-60;
                                          yourhour=yourhour+1;
                                          }
                                          if (yourhour>=24)
                                          {
                                              yourhour=24-yourhour;
                                          }
                                      if(yourmin<10)
                                          {
                                         yourmin="0"+yourmin;
                                          }
                                      document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                                      return;
                                  }

                                  //Nationchange
                                  if(country == "TPE")
                                  {
                                      yourhour=utchour+8;
                                      yourmin=utcmin+0;
                                      if (yourmin>=60)
                                          {
                                          yourmin=yourmin-60;
                                          yourhour=yourhour+1;
                                          }
                                          if (yourhour>=24)
                                          {
                                              yourhour=24-yourhour;
                                          }
                                      if(yourmin<10)
                                          {
                                         yourmin="0"+yourmin;
                                          }
                                      document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                                      return;
                                  }

                                  //Nationchange
                                  if(country == "TJK")
                                  {
                                      yourhour=utchour+5;
                                      yourmin=utcmin+0;
                                      if (yourmin>=60)
                                          {
                                          yourmin=yourmin-60;
                                          yourhour=yourhour+1;
                                          }
                                          if (yourhour>=24)
                                          {
                                              yourhour=24-yourhour;
                                          }
                                      if(yourmin<10)
                                          {
                                         yourmin="0"+yourmin;
                                          }
                                      document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                                      return;
                                  }

                                   //Nationchange
                                   if(country == "THA")
                                   {
                                       yourhour=utchour+7;
                                       yourmin=utcmin+0;
                                       if (yourmin>=60)
                                           {
                                           yourmin=yourmin-60;
                                           yourhour=yourhour+1;
                                           }
                                           if (yourhour>=24)
                                           {
                                               yourhour=24-yourhour;
                                           }
                                       if(yourmin<10)
                                           {
                                          yourmin="0"+yourmin;
                                           }
                                       document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                                       return;
                                   }

                                       //Nationchange
                                       if(country == "TLS")
                                       {
                                           yourhour=utchour+9;
                                           yourmin=utcmin+0;
                                           if (yourmin>=60)
                                               {
                                               yourmin=yourmin-60;
                                               yourhour=yourhour+1;
                                               }
                                               if (yourhour>=24)
                                               {
                                                   yourhour=24-yourhour;
                                               }
                                           if(yourmin<10)
                                               {
                                              yourmin="0"+yourmin;
                                               }
                                           document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                                           return;
                                       }

                                            //Nationchange
                                            if(country == "TKM")
                                            {
                                                yourhour=utchour+5;
                                                yourmin=utcmin+0;
                                                if (yourmin>=60)
                                                    {
                                                    yourmin=yourmin-60;
                                                    yourhour=yourhour+1;
                                                    }
                                                    if (yourhour>=24)
                                                    {
                                                        yourhour=24-yourhour;
                                                    }
                                                if(yourmin<10)
                                                    {
                                                   yourmin="0"+yourmin;
                                                    }
                                                document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                                                return;
                                            }
                                              //Nationchange
                                              if(country == "UAE")
                                              {
                                                  yourhour=utchour+4;
                                                  yourmin=utcmin+0;
                                                  if (yourmin>=60)
                                                      {
                                                      yourmin=yourmin-60;
                                                      yourhour=yourhour+1;
                                                      }
                                                      if (yourhour>=24)
                                                      {
                                                          yourhour=24-yourhour;
                                                      }
                                                  if(yourmin<10)
                                                      {
                                                     yourmin="0"+yourmin;
                                                      }
                                                  document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                                                  return;
                                              }
                                              //Nationchange
                                              if(country == "UZB")
                                              {
                                                  yourhour=utchour+5;
                                                  yourmin=utcmin+0;
                                                  if (yourmin>=60)
                                                      {
                                                      yourmin=yourmin-60;
                                                      yourhour=yourhour+1;
                                                      }
                                                      if (yourhour>=24)
                                                      {
                                                          yourhour=24-yourhour;
                                                      }
                                                  if(yourmin<10)
                                                      {
                                                     yourmin="0"+yourmin;
                                                      }
                                                  document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                                                  return;
                                              }
    
                                                //Nationchange
                                                if(country == "VIE")
                                                {
                                                    yourhour=utchour+7;
                                                    yourmin=utcmin+0;
                                                    if (yourmin>=60)
                                                        {
                                                        yourmin=yourmin-60;
                                                        yourhour=yourhour+1;
                                                        }
                                                        if (yourhour>=24)
                                                        {
                                                            yourhour=24-yourhour;
                                                        }
                                                    if(yourmin<10)
                                                        {
                                                       yourmin="0"+yourmin;
                                                        }
                                                    document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                                                    return;
                                                }

                                                //Nationchange
                                                if(country == "YEM")
                                                {
                                                    yourhour=utchour+3;
                                                    yourmin=utcmin+0;
                                                    if (yourmin>=60)
                                                        {
                                                        yourmin=yourmin-60;
                                                        yourhour=yourhour+1;
                                                        }
                                                        if (yourhour>=24)
                                                        {
                                                            yourhour=24-yourhour;
                                                        }
                                                    if(yourmin<10)
                                                        {
                                                       yourmin="0"+yourmin;
                                                        }
                                                    document.getElementById("showtime").innerHTML=yourhour+":"+yourmin;
                                                    return;
                                                }
    

    //else
    else
    {
        document.getElementById("showtime").innerHTML="ไม่มีข้อมูล";
    }



}
