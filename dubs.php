<?php

//Print dubs type beside post number

function getArray($num, $digits){//digits = #of digits in post#
	$array = array();
	for ($i = $digits; $i >= 1; $i--){
		$x = $num % pow(10, $i);
		$y = $num % pow(10, $i - 1);
		$x -= $y;
		$x /= pow(10, $i-1);
		array_push($array, $x);
	}
	return $array;
}

function dubs($num, $digits){//digits = #of digits in post#
	$array = getArray($num, $digits);
	if ($digits >= 2){//min #of posts
		if ($array[$digits-1] == $array[$digits-2]){//Check dubs
			return true;
		}
	}
	return false;
}

function dubs2($num, $digits){//digits = #of digits in post#
	$array = getArray($num, $digits);
	if ($digits >= 4){//min #of posts
		if ($array[$digits-1] == $array[$digits-3]){//Check matching digits
			if ($array[$digits-2] == $array[$digits-4]){//Check matching digits
				if ($array[$digits-1] != $array[$digits-2]){//Check for repeating digits
					if ($array[$digits-3] != $array[$digits-4]){//Check for repeating digits
						return true;
					}
				}
			}
		}
	}
	return false;
}

function dubs3($num, $digits){//digits = #of digits in post#
	$array = getArray($num, $digits);
	if ($digits >= 6){//min #of posts
		if ($array[$digits-1] == $array[$digits-4]){//Check matching digits
			if ($array[$digits-2] == $array[$digits-5]){//Check matching digits
				if ($array[$digits-3] == $array[$digits-6]){//Check matching digits
					if ($array[$digits-1] != $array[$digits-2] || $array[$digits-1] != $array[$digits-3] || $array[$digits-2] != $array[$digits-3]){//Check for repeating digits
						if ($array[$digits-4] != $array[$digits-5] || $array[$digits-4] != $array[$digits-6] || $array[$digits-5] != $array[$digits-6]){//Check for repeating digits
							return true;
						}
					}
				}
			}
		}
	}
	return false;
}

function dubs4($num, $digits){//digits = #of digits in post#
	$array = getArray($num, $digits);
	if ($digits >= 8){//min #of posts
		if ($array[$digits-1] == $array[$digits-5]){//Check matching digits
			if ($array[$digits-2] == $array[$digits-6]){//Check matching digits
				if ($array[$digits-3] == $array[$digits-7]){//Check matching digits
					if ($array[$digits-4] == $array[$digits-8]){//Check matching digits
						if ($array[$digits-1] != $array[$digits-2] || $array[$digits-1] != $array[$digits-3] || $array[$digits-1] != $array[$digits=4] || $array[$digits-2] != $array[$digits-3] || $array[$digits-2] != $array[$digits-4] || $array[$digits-3] != $array[$digits-4]){//Check for repeating digits
							if ($array[$digits-5] != $array[$digits-6] || $array[$digits-5] != $array[$digits-7] || $array[$digits-5] != $array[$digits=8] || $array[$digits-6] != $array[$digits-7] || $array[$digits-6] != $array[$digits-8] || $array[$digits-7] != $array[$digits-8]){//Check for repeating digits
								return true;	
                                                }

						}
					}
				}
			}
		}
	}
	return false;
}

function trips($num, $digits){//digits = #of digits in post#
	$array = getArray($num, $digits);
	if ($digits >= 3){//min #of posts
		if ($array[$digits-1] == $array[$digits-2] && $array[$digits-1] == $array[$digits-3]){//Check trips
			return true;
		}
	}
	return false;
}

function trips2($num, $digits){//digits = #of digits in post#
	$array = getArray($num, $digits);
	if ($digits >= 6){//min #of posts
		if ($array[$digits-1] == $array[$digits-3] && $array[$digits-1] == $array[$digits-5]){//Check digits
			if ($array[$digits-2] == $array[$digits-4] && $array[$digits-2] == $array[$digits-6]){//Check digits
				if ($array[$digits-1] != $array[$digits-2]){//Check for repeating digits
					if($array[$digits-3] != $array[$digits-4]){//Check for repeating digits
						if ($array[$digits-5] != $array[$digits-6]){//Check for repeating digits
							return true;
						}
					}
				}
			}
		}
	}
	return false;
}

function trips3($num, $digits){//digits = #of digits in post#
	$array = getArray($num, $digits);
	if ($digits >= 9){//min #of posts
		if ($array[$digits-1] == $array[$digits-4] && $array[$digits-1] == $array[$digits-7]){//Check digits
			if ($array[$digits-2] == $array[$digits-5] && $array[$digits-2] == $array[$digits-8]){//Check digits
				if ($array[$digits-3] == $array[$digits-6] && $array[$digits-3] == $array[$digits-9]){//Check digits
					if ($array[$digits-1] != $array[$digits-2] || $array[$digits-1] != $array[$digits-3] || $array[$digits-2] != $array[$digits-3]){//Check digits
						if ($array[$digits-4] != $array[$digits-5] || $array[$digits-4] != $array[$digits-6] || $array[$digits-5] != $array[$digits-6]){//Check digits
							return true;
						}
					}
				}
			}
		}
	}
	return false;
}

function quads($num, $digits){//digits = #of digits in post#
	$array = getArray($num, $digits);
	if ($digits >= 4){//min #of posts
		if ($array[$digits-1] == $array[$digits-2] && $array[$digits-1] == $array[$digits-3] && $array[$digits-1] == $array[$digits-4]){//Check quads
			return true;
		}
	}
	return false;
}

function quints($num, $digits){//digits = #of digits in post#
	$array = getArray($num, $digits);
	if ($digits >= 5){//min #of posts
		if ($array[$digits-1] == $array[$digits-2] && $array[$digits-1] == $array[$digits-3] && $array[$digits-1] == $array[$digits-4] && $array[$digits-1] == $array[$digits-5]){//Check quints
			return true;
		}
	}
	return false;
}

function sexas($num, $digits){//digits = #of digits in post#
        $array = getArray($num, $digits);
        if ($digits >= 6){//min #of posts
                if ($array[$digits-1] == $array[$digits-2] && $array[$digits-1] == $array[$digits-3] && $array[$digits-1] == $array[$digits-4] && $array[$digits-1] == $array[$digits-5] && $array[$digits-1] == $array[$digits-6]){//Check sexas
                        return true;
                }
        }
        return false;
}

function septs($num, $digits){//digits = #of digits in post#
        $array = getArray($num, $digits);
        if ($digits >= 7){//min #of posts
                if ($array[$digits-1] == $array[$digits-2] && $array[$digits-1] == $array[$digits-3] && $array[$digits-1] == $array[$digits-4] && $array[$digits-1] == $array[$digits-5] && $array[$digits-1] == $array[$digits-6] && $array[$digits-1] == $array[$digits-7]){//Check septs
                        return true;
                }
        }
        return false;
}

function octs($num, $digits){//digits = #of digits in post#
        $array = getArray($num, $digits);
        if ($digits >= 8){//min #of posts
                if ($array[$digits-1] == $array[$digits-2] && $array[$digits-1] == $array[$digits-3] && $array[$digits-1] == $array[$digits-4] && $array[$digits-1] == $array[$digits-5] && $array[$digits-1] == $array[$digits-6] && $array[$digits-1] == $array[$digits-7] && $array[$digits-1] == $array[$digits-8]){//Check octs
                        return true;
                }
        }
        return false;
}

function nons($num, $digits){//digits = #of digits in post#
        $array = getArray($num, $digits);
        if ($digits >= 9){//min #of posts
                if ($array[$digits-1] == $array[$digits-2] && $array[$digits-1] == $array[$digits-3] && $array[$digits-1] == $array[$digits-4] && $array[$digits-1] == $array[$digits-5] && $array[$digits-1] == $array[$digits-6] && $array[$digits-1] == $array[$digits-7] && $array[$digits-1] == $array[$digits-8] && $array[$digits-1] == $array[$digits-9]){//Check nons
                        return true;
                }
        }
        return false;
}

function dubDubs($num, $digits){//digits = #of digits in post#
	$array = getArray($num, $digits);
	if ($digits >= 4){//min #of posts
			if ($array[$digits-1] == $array[$digits-2] && $array[$digits-3] == $array[$digits-4]){//Check dubs
				if ($array[$digits-1] != $array[$digits-4]){//Check for repeating dubs
					return true;	
				}
			}
	}
	return false;
}

function tripDubs($num, $digits){//digits = #of digits in post#
	$array = getArray($num, $digits);
	if ($digits >= 6){//min #of posts
		if ($array[$digits-1] == $array[$digits-2]){//Check dubs
			if ($array[$digits-3] == $array[$digits-4]){//Check dubs
				if ($array[$digits-5] == $array[$digits-6]){//Check dubs
					if ($array[$digits-1] != $array[$digits-3]){//Check for repeating dubs
						if ($array[$digits-1] != $array[$digits-5]){//Check for repeating dubs
							if($array[$digits-3] != $array[$digits-5]){//Check for repeating dubs
								return true;	
							}
						}
					}
				}
			}
		}
	}
	return false;
}

function quadDubs($num, $digits){//digits = #of digits in post#
	$array = getArray($num, $digits);
	if ($digits >= 8){//min #of posts
		if ($array[$digits-1] == $array[$digits-2]){//Check dubs
			if ($array[$digits-3] == $array[$digits-4]){//Check dubs
				if ($array[$digits-5] == $array[$digits-6]){//Check dubs
					if ($array[$digits-7] == $array[$digits-8]){//Check dubs
						if ($array[$digits-1] != $array[$digits-3]){//Check for repeating dubs	
							if ($array[$digits-1] != $array[$digits-5]){//Check for repeating dubs
								if ($array[$digits-1] != $array[$digits-7]){//Check for repeating dubs
									if ($array[$digits-3] != $array [$digits-5]){//Check for repeating dubs
										if ($array[$digits-3] != $array[$digits-7]){//Check for repeating dubs
											if ($array[$digits-5] != $array[$digits-7]){//Check for repeating dubs
												return true;
											}
										}
									}
								}
							}
						}
					}
				}
			}	
		}	
	}
	return false;	
}

function quadDubs2($num, $digits){//digits = #of digits in post#
	$array = getArray($num, $digits);
	if ($digits >= 8){//min #of posts
		if ($array[$digits-1] == $array[$digits-3] && $array[$digits-1] == $array[$digits-5] && $array[$digits-1] == $array[$digits-7]){//Check digits
			if ($array[$digits-2] == $array[$digits-4] && $array[$digits-2] == $array[$digits-6] && $array[$digits-2] == $array[$digits-8]){//Check digits
				if ($array[$digits-1] != $array[$digits-2]){//Check for repeating digits
					if ($array[$digits-2] != $array[$digits-3]){//Check for repeating digits
						if ($array[$digits-2] != $array[$digits-3]){//Check for repeating digits
							if ($array[$digits-2] != $array[$digits-3]){//Check for repeating digits
								return true;	
        		                                }
        	                                }
	                                }
				}	
	                }
		}
	}
	return false;
}

function dubTrips($num, $digits){//digits = #of digits in post#
	$array = getArray($num, $digits);
	if ($digits >= 6){//min #of posts
		if ($array[$digits-1] == $array[$digits-2] && $array[$digits-1] == $array[$digits-3]){//Check trips
			if ($array[$digits-4] == $array[$digits-5] && $array[$digits-4] == $array[$digits-6]){//Check trips
				if ($array[$digits-1] != $array[$digits-4]){//Check for repeating trips
					return true;
				}
			}
		}
	}
	return false;
}

function tripTrips($num, $digits){//digits = #of digits in post#
	$array = getArray($num, $digits);
	if ($digits >= 9){//min #of posts
		if ($array[$digits-1] == $array[$digits-2] && $array[$digits-1] == $array[$digits-3]){//Check trips
			if ($array[$digits-4] == $array[$digits-5] && $array[$digits-4] == $array[$digits-6]){//Check trips
				if ($array[$digits-7] == $array[$digits-8] && $array[$digits-7] == $array[$digits-9]){//Check trips
					if ($array[$digits-1] != $array[$digits-4]){//Check for repeating trips
						if ($array[$digits-1] != $array[$digits-7]){//Check for repeating trips
							if ($array[$digits-4] != $array[$digits-7]){//Check for repeating trips
								return true;
							}
						}
					}
				}
			}
		}
	}
	return false;
}

function dubQuads($num, $digits){//digits = #of digits in post#
	$array = getArray($num, $digits);
	if ($digits >= 8){//min #of posts
		if ($array[$digits-1] == $array[$digits-2] && $array[$digits-1] == $array[$digits-3] && $array[$digits-1] == $array[$digits-4]){//Check quads
			if ($array[$digits-5] == $array[$digits-6] && $array[$digits-5] == $array[$digits-7] && $array[$digits-5] == $array[$digits-8]){//Check quads
				if ($array[$digits-1] != $array[$digits-5]){//Chech for repeating quads
					return true;
				}
			}
		} 
	}
	return false;
}

//REMOVE QUOTES FOR TESTING
//$test = 922223333; //DubQuads
//$test = 111222333; //TripTrips
//$test = 987111222; //DubTrips
//$test = 911223344; //QuadDubs
//$test = 912121212; //QuadDubs2
//$test = 987112233; //TripDubs
//$test = 987651122; //DubDubs
//$test = 111111111; //Nons
//$test = 911111111; //Octs
//$test = 981111111; //Septs
//$test = 987111111; //Sexas
//$test = 987611111; //Quints
//$test = 987651111; //Quads
//$test = 987654111; //Trips
//$test = 987121212; //Trips2
//$test = 123123123; //Trips3
//$test = 122122122; //Trips3 2Similar Digits
//$test = 987654311; //Dubs
//$test = 987651212; //Dubs2
//$test = 987123123; //Dubs3
//$test = 987122122; //Dubs3 2 Similar Digits
//$test = 912341234; //Dubs4
//$test = 911231123; //Dubs4 2 Similar Digits
//$test = 911121112; //Dubs4 3 Similar Digits
//$post_number = $test; //REMOVE QUOTES FOR TESTING

	  ////////////////////////////////////////////////
	 //@@@@@@@@@@@@@@@@//IMPORTANT//@@@@@@@@@@@@@@@//
	//VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV//
//Replace $post_number with 4chan's variable for post numbers
if (dubQuads($post_number, 9)){
	$post_number .= "(DubQuads)";
}
else if (tripTrips($post_number, 9)){
	$post_number .= "(TripTrips)";
}
else if (dubTrips($post_number, 9)){
	$post_number .= "(DubTrips)";
}										
else if (quadDubs($post_number, 9)){
	$post_number .= "(QuadDubs)";									
}
else if (quadDubs2($post_number, 0)){
	$post_number .= "(QuadDubs)";
}
/*else if (quadDubs2($post_number, 9)){
	$post_number .= "(QuadDubs2)";
}*/ //Remove quotes for testing
else if (tripDubs($post_number, 9)){
	$post_number .= "(TripDubs)";	
}
else if (dubDubs($post_number, 9)){
	$post_number .= "(DubDubs)";	
}
else if (nons($post_number, 9)){
	$post_number .= "(ADMINGET)";
}
else if (octs($post_number, 9)){
	$post_number .= "(OnceInALifetime)";
}
else if (septs($post_number, 9)){
        $post_number .= "(MOD GET)";
}
else if (sexas($post_number, 9)){
        $post_number .= "(SEXas ;^d)";
}
else if (quints($post_number, 9)){
        $post_number .= "(QUINTS!)";
}
else if (quads($post_number, 9)){
        $post_number .= "(Quads!)";
}
else if (trips($post_number, 9)){
        $post_number .= "(Trips)";
}
else if (trips2($post_number, 9)){
	$post_number .= "(Trips)"; 
}
else if (trips3($post_number, 9)){
	$post_number .= "(Trips)"; 
}
/*else if (trips2($post_number, 9)){
	$post_number .= "(Trips2)";
}
else if (trips3($post_number, 9)){
	$post_number .= "(Trips3)";
}*/ //Remove quotes for Testing
else if (dubs($post_number, 9)){
        $post_number .= "(Dubs)";
}
else if (dubs2($post_number, 9)){
	$post_number .= "(Dubs)"; 
} 
else if (dubs3($post_number, 9)){
	$post_number .= "(Dubs)"; 
} 
else if (dubs4($post_number, 9)){
	$post_number .= "(Dubs)"; 
} 
/*else if (dubs2($post_number, 9)){
	$post_number .= "(Dubs2)"; 
}
else if (dubs3($post_number, 9)){
	$post_number .= "(Dubs3)"; 
}
else if (dubs4($post_number, 9)){
	$post_number .= "(Dubs4)"; 
}*/ //Remove quotes for testing


//print $post_number; //Remove quotes for testing
