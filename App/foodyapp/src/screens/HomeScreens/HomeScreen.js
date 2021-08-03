import React, {useEffect, useState, useContext} from "react";
import {
  View,
  ScrollView,
  FlatList,
  Text,
  Image,
  Dimensions,
} from "react-native";
import Icon from "react-native-vector-icons/Ionicons";
import { BottomTabSelectedContext } from "../../context/BottomTabSelectedContext";
import * as Animatable from 'react-native-animatable';
import SearchBar from "../../components/SearchBar";
import ImageSlider from "../../components/ImageSlider";
import FoodList from "../../components/FoodList";

function HomeScreen({ navigation }) {
    const [selectedIndex, setSelectedIndex] = useContext(BottomTabSelectedContext);
    
    return (
      <View
        style={{
          flex: 1,
          alignItems: "center",
          justifyContent: "center",
          backgroundColor: "white",
        }}
      >
        <ScrollView>
        <Animatable.View animation="bounceInDown" delay={500} duration={2000}>
          <Text style={{ fontSize: 15, fontWeight: "bold", fontStyle: "normal", textAlign: 'center', paddingBottom: 20 }}>
            Find your favourite foods
          </Text>
          </Animatable.View>
        <SearchBar />
        <ImageSlider />
        <FoodList />
        </ScrollView>
        
      </View>
    );
  }

  export default HomeScreen;