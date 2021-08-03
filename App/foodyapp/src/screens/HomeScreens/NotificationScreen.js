import React, {useEffect, useState, useContext} from "react";
import {
  View,
  ScrollView,
  Text,
  TextInput,
  Dimensions,
} from "react-native";
import Icon from "react-native-vector-icons/Ionicons";
import * as Animatable from 'react-native-animatable';
import { BottomTabSelectedContext } from "../../context/BottomTabSelectedContext";

function NotificationScreen({ navigation }) {
    const [selectedIndex, setSelectedIndex] = useContext(BottomTabSelectedContext);


    return(
        <Animatable.View animation="bounceInDown">
        <Text>Notifications screen</Text>
        </Animatable.View>
    );
}

export default NotificationScreen;